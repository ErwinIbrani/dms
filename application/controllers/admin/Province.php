<?php

class Province extends CI_Controller
{
    public function __Construct()
    {
        parent ::__construct();
        $this->load->model(['Province_Model']);
        $this->load->library(['ion_auth', 'form_validation', 'form_validation', 'pagination']);
        $this->lang->load('auth');
        $this->load->helper('custom');
        authentication($this->ion_auth->logged_in());
    }

    public function index($rowno=0)
    {
        $search_text = "";
        if($this->input->post('submit') != NULL ){
            $search_text = $this->input->post('search');
            $this->session->set_userdata(["search" => $search_text]);
        }else{
            if($this->session->userdata('search') != NULL){
                $search_text = $this->session->userdata('search');
            }
        }
        $rowperpage = 20;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        }
        $allcount             = $this->Province_Model->getrecordCount($search_text);
        $records              = $this->Province_Model->getData($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'admin/province/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;
        // Initialize
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('admin/province/index', [
            'pagination' => $pagination,
            'provinces'  => $records,
            'search'     => $search_text,
        ]);
    }

    public function create()
    {
        $models    = $this->Province_Model->getRegion()->result();
        return view('admin/province/create', ['models' => $models]);
    }

    public function store()
    {
        $this->form_validation->set_rules('region_id', 'Region Name', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('code', 'Char', 'required');
        if ($this->form_validation->run() == FALSE) {
            $models    = $this->Province_Model->getRegion()->result();
            return view('admin/province/create', ['models' => $models]);
        }
        else {
            $data = [
                'region_id'   => $this->input->post('region_id'),
                'name'        => $this->input->post('name'),
                'code'        => $this->input->post('code'),
                'created_at'  => date('Y-m-d H:i:s')
            ];
            $this->Province_Model->save($data);
            $this->session->set_flashdata('success', 'Data Inserted');
            redirect("admin/province/index", 'refresh');
        }
    }

    public function edit($id)
    {
        $model     = $this->Province_Model->findOne($id)->row();
        $models    = $this->Province_Model->getRegion()->result();
        return view('admin/province/edit', ['model' => $model, 'models' => $models]);
    }

    public function update()
    {
        $this->form_validation->set_rules('region_id', 'Region Name', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('code', 'Char', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('warning', 'Please Update Correctly');
            redirect_back();
        }
        else {
            $update = [
                'region_id'   => $this->input->post('region_id'),
                'name'        => $this->input->post('name'),
                'code'        => $this->input->post('code'),
                'updated_at'  => date('Y-m-d H:i:s')
            ];
            $this->Province_Model->update($this->input->post('id'), $update);
            $this->session->set_flashdata('success', 'Data Edited');
            redirect("admin/province/index", 'refresh');
        }
    }

    public function destroy($id)
    {
        //Soft delete
        $update = [
           'deleted_at'  => date('Y-m-d H:i:s')
        ];
        $this->Province_Model->update($id, $update);
        //hard delete
        // $this->GroupVendor_Model->delete($id);
        $this->session->set_flashdata('success', 'Data Deleted');
        redirect("admin/province/index", 'refresh');
    }

    public function getRegion()
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->Province_Model->getRegion($searchTerm);
        echo json_encode($response);
    }

}