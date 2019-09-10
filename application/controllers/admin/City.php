<?php

class City extends CI_Controller
{
    public function __Construct()
    {
        parent ::__construct();
        $this->load->model(['City_Model']);
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
        if($rowno  != 0){
            $rowno  = ($rowno-1) * $rowperpage;
        }
        $allcount             = $this->City_Model->getrecordCount($search_text);
        $records              = $this->City_Model->getData($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'admin/city/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;
        // Initialize
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('admin/city/index', [
            'pagination' => $pagination,
            'cities'     => $records,
            'search'     => $search_text,
        ]);
    }

    public function create()
    {
        $models = $this->City_Model->getProvince()->result();
        return view('admin/city/create', ['models' => $models]);
    }

    public function store()
    {
        $this->form_validation->set_rules('name', 'City Name', 'required');
        $this->form_validation->set_rules('province_id', 'Province Name', 'required');
        $this->form_validation->set_rules('code', 'Code', 'required');
        $this->form_validation->set_rules('bsni', 'BSNI', 'required');
        if ($this->form_validation->run() == FALSE) {
            $models = $this->City_Model->getProvince()->result();
            return view('admin/city/create', ['models' => $models]);
        }
        else {
            $data = [
                'name'        => $this->input->post('name'),
                'province_id' => $this->input->post('province_id'),
                'code'        => $this->input->post('code'),
                'bsni'        => $this->input->post('bsni'),
                'created_at'  => date('Y-m-d H:i:s')
            ];
            $this->City_Model->save($data);
            $this->session->set_flashdata('success', 'Data Inserted');
            redirect("admin/city/index", 'refresh');
        }
    }

    public function edit($id)
    {
        $model     = $this->City_Model->findOne($id)->row();
        $models    = $this->City_Model->getProvince()->result();
        return view('admin/city/edit', ['model' => $model, 'models' => $models]);
    }

    public function update()
    {
        $this->form_validation->set_rules('name', 'City Name', 'required');
        $this->form_validation->set_rules('province_id', 'Province Name', 'required');
        $this->form_validation->set_rules('code', 'Code', 'required');
        $this->form_validation->set_rules('bsni', 'BSNI', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('warning', 'Please Update Correctly');
            redirect_back();
        }
        else {
            $update = [
                'name'        => $this->input->post('name'),
                'province_id' => $this->input->post('province_id'),
                'code'        => $this->input->post('code'),
                'bsni'        => $this->input->post('bsni'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ];
            $this->City_Model->update($this->input->post('id'), $update);
            $this->session->set_flashdata('success', 'Data Edited');
            redirect("admin/city/index", 'refresh');
        }
    }

    public function destroy($id)
    {
        //Soft delete
        $update = [
            'deleted_at'  => date('Y-m-d H:i:s')
        ];
        $this->City_Model->update($id, $update);
        //hard delete
        // $this->GroupVendor_Model->delete($id);
        $this->session->set_flashdata('success', 'Data Deleted');
        redirect("admin/city/index", 'refresh');
    }

}