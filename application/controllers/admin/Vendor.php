<?php

class Vendor extends CI_Controller
{

    public function __Construct()
    {
        parent ::__construct();
        $this->load->model(['Vendor_Model']);
        $this->load->library(['ion_auth', 'form_validation', 'form_validation', 'pagination']);
        $this->lang->load('auth');
        $this->load->helper('custom');
        authentication($this->ion_auth->logged_in());
    }

    public function index($rowno=0)
    {
        $this->make_bread->add('Index');
        $breadcrumb = $this->make_bread->output();
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
        $allcount             = $this->Vendor_Model->getrecordCount($search_text);
        $records              = $this->Vendor_Model->getDatas($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'admin/vendor/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;
        // Initialize
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('admin/vendor/index', [
            'pagination'   => $pagination,
            'groups'       => $records,
            'search'       => $search_text,
            'breadcrumb'   => $breadcrumb,
        ]);
    }

    public function create()
    {
        $this->make_bread->add('Index', 'admin/vendor/index', TRUE);
        $this->make_bread->add('Create');
        $breadcrumb = $this->make_bread->output();
        return view('admin/vendor/create', ['breadcrumb' => $breadcrumb]);
    }

    public  function store()
    {
          $data = [
                    'group_name'   => $this->input->post('group_name'),
                    'created_by'   => $this->ion_auth->user()->row()->id,
                    'created_at'   => date('Y-m-d H:i:s')
            ];
            $this->Vendor_Model->save($data);
            $this->session->set_flashdata('success', 'Data Inserted');
            redirect("admin/vendor/index", 'refresh');

    }

    public function edit($id)
    {
        $this->make_bread->add('Index', 'admin/vendor/index', TRUE);
        $this->make_bread->add('Update');
        $breadcrumb   = $this->make_bread->output();
        $model        = $this->Vendor_Model->findOne($id)->row();
        return view('admin/vendor/edit', ['model' => $model, 'breadcrumb' => $breadcrumb]);
    }

    public function update()
    {
      $update = [
                'group_name'   => $this->input->post('group_name'),
                'updated_by'   => $this->ion_auth->user()->row()->id,
                'updated_at'   => date('Y-m-d H:i:s')
       ];
       $this->Vendor_Model->update($this->input->post('id'), $update);
       $this->session->set_flashdata('success', 'Data Edited');
       redirect("admin/vendor/index", 'refresh');
    }

    public function destroy($id)
    {
        //Soft delete
        $update = [
            'deleted_at'   => date('Y-m-d H:i:s')
        ];
        $this->Vendor_Model->update($id, $update);
        //hard delete
       // $this->GroupVendor_Model->delete($id);
        $this->session->set_flashdata('success', 'Data Deleted');
        redirect("admin/vendor/index", 'refresh');
    }
    

}
