<?php

class Documentsetting extends CI_Controller
{

    public function __Construct()
    {
        parent ::__construct();
        $this->load->model(['DocumentSetting_Model', 'Group_Model']);
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
        $allcount             = $this->DocumentSetting_Model->getrecordCount($search_text);
        $records              = $this->DocumentSetting_Model->getData($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'admin/documentsetting/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;
        // Initialize
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('admin/document-setting/index', [
            'pagination'   => $pagination,
            'documents'    => $records,
            'search'       => $search_text,
            'breadcrumb'   => $breadcrumb,
        ]);
    }

    public function create()
    {
        $this->make_bread->add('Index', 'admin/documentsetting/index', TRUE);
        $this->make_bread->add('Create');
        $breadcrumb = $this->make_bread->output();
        $roles = $this->Group_Model->groups()->result();
        return view('admin/document-setting/create',
            ['breadcrumb' => $breadcrumb,
              'roles'     => $roles
            ]);
    }

    public  function store()
    {
        $data = ['document_name' => $this->input->post('document_name'),
                 'document_role' => $this->input->post('addmore'),
                 'document_type' => $this->input->post('addmores')
        ];

        foreach ($this->input->post('addmore') as $key => $value) {

            var_dump($value);

        }
        exit();

        $status = $this->DocumentSetting_Model->saveMultiple($data);
        var_dump($status);
        exit();
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
