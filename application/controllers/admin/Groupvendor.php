<?php

class Groupvendor extends CI_Controller
{

    public function __Construct()
    {
        parent ::__construct();
        $this->load->model('GroupVendor_Model');
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
            $this->session->set_userdata([ "search" => $search_text]);
        }else{
            if($this->session->userdata('search') != NULL){
                $search_text = $this->session->userdata('search');
            }
        }
        $rowperpage = 4;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        }
        $allcount           = $this->GroupVendor_Model->getrecordCount($search_text);
        $records            = $this->GroupVendor_Model->getDatas($rowno, $rowperpage, $search_text);
        $config['base_url'] = base_url().'admin/groupvendor/index';
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;
        // Initialize
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('admin/group-vendor/index', [
            'pagination' => $pagination,
            'groups'    => $records,
            'search'    => $search_text,
        ]);
    }

    public function create()
    {
        return view('admin/group-vendor/create');
    }

    public  function store()
    {
      $this->form_validation->set_rules('group_name', 'Group Name', 'required');
      if ($this->form_validation->run() == FALSE) {
            return view('admin/group-vendor/create');
        }
      else {
            $data = [
                'group_name'   => $this->input->post('group_name'),
                'created_by'   => $this->ion_auth->user()->row()->id,
            ];
            $this->GroupVendor_Model->save($data);
            $this->session->set_flashdata('success', 'Data Inserted');
            redirect("admin/groupvendor/create", 'refresh');
         }
    }

    public function edit($id)
    {
        $model     = $this->GroupVendor_Model->findOne($id)->row();
        return view('admin/group-vendor/edit', ['model' => $model]);
    }

    public function update()
    {
        $this->form_validation->set_rules('group_name', 'Group Name', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Please update correctly');
            redirect("admin/groupvendor/edit/".$this->input->post('id'), 'refresh');
        }
        else {
            $update = [
                'group_name'   => $this->input->post('group_name'),
                'updated_by'   => $this->ion_auth->user()->row()->id,
            ];
            $this->GroupVendor_Model->update($this->input->post('id'), $update);
            $this->session->set_flashdata('success', 'Data Edited');
            redirect("admin/groupvendor/index", 'refresh');
        }
    }

    public function destroy($id)
    {
        $this->GroupVendor_Model->delete($id);
        $this->session->set_flashdata('success', 'Data Deleted');
        redirect("admin/groupvendor/index", 'refresh');
    }
    

}
