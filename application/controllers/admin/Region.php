<?php

class Region extends CI_Controller
{

    public function __Construct()
    {
        parent ::__construct();
        $this->load->model(['Region_Model']);
        $this->load->library(['ion_auth', 'form_validation', 'form_validation', 'pagination']);
        $this->lang->load('auth');
        $this->load->helper('custom');
        authentication($this->ion_auth->logged_in());
    }

    /**
     * @param int $rowno
     * @return bool
     */
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
        $allcount             = $this->Region_Model->getrecordCount($search_text);
        $records              = $this->Region_Model->getData($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'admin/region/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;
        // Initialize
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('admin/region/index', [
            'pagination' => $pagination,
            'regions'    => $records,
            'search'     => $search_text,
        ]);
    }

    public function create()
    {
        return view('admin/region/create');
    }

    public function store()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('code', 'Code', 'required');
        $this->form_validation->set_rules('char', 'Char', 'required');
        if ($this->form_validation->run() == FALSE) {
            return view('admin/region/create');
        }
        else {
            $data = [
                'name'   => $this->input->post('name'),
                'code'   => $this->input->post('code'),
                'char'   => $this->input->post('char'),
                'created_at'  => date('Y-m-d H:i:s')
            ];
            $this->Region_Model->save($data);
            $this->session->set_flashdata('success', 'Data Inserted');
            redirect("admin/region/index", 'refresh');
        }
    }

    public function edit($id)
    {
        $model     = $this->Region_Model->findOne($id)->row();
        return view('admin/region/edit', ['model' => $model]);
    }

    public function update()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('code', 'Code', 'required');
        $this->form_validation->set_rules('char', 'Char', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('warning', 'Please Update Correctly');
            redirect_back();
        }
        else {
            $update = [
                'name'   => $this->input->post('name'),
                'code'   => $this->input->post('code'),
                'char'   => $this->input->post('char'),
                'updated_at'  => date('Y-m-d H:i:s')
            ];
            $this->Region_Model->update($this->input->post('id'), $update);
            $this->session->set_flashdata('success', 'Data Edited');
            redirect("admin/region/index", 'refresh');
        }
    }

    public function destroy($id)
    {
        //Soft delete
        $update = [
            'deleted_at'  => date('Y-m-d H:i:s')
        ];
        $this->Region_Model->update($id, $update);
        //hard delete
        // $this->GroupVendor_Model->delete($id);
        $this->session->set_flashdata('success', 'Data Deleted');
        redirect("admin/region/index", 'refresh');
    }

}