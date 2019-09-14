<?php

class Vendorproject extends CI_Controller
{
    public function __Construct()
    {
        parent ::__construct();
        $this->load->model(['VendorProject_Model']);
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
        if($rowno  != 0){
            $rowno  = ($rowno-1) * $rowperpage;
        }
        $allcount             = $this->VendorProject_Model->getrecordCount($search_text);
        $records              = $this->VendorProject_Model->getData($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'admin/vendorproject/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;
        // Initialize
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('admin/vendor-project/index', [
            'pagination' => $pagination,
            'vendors'    => $records,
            'search'     => $search_text,
            'breadcrumb' => $breadcrumb,
        ]);
    }

}