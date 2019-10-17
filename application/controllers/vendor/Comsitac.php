<?php

class Comsitac extends CI_Controller
{

    public function __Construct()
    {
        parent::__construct();
        $this->load->model(['Project_Model', 'ComSitac_Model']);
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
        $allcount             = $this->ComSitac_Model->getrecordCountByVendor($search_text);
        $records              = $this->ComSitac_Model->getDataByVendor($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'project/comsitac/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;

        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('vendor/com-sitac/index-assignment', [
            'pagination' => $pagination,
            'projects'   => $records,
            'search'     => $search_text,
            'breadcrumb' => $breadcrumb,
        ]);
    }

    public function view($document_id)
    {
        $document_candidate = $this->ComSitac_Model->findByComSitac($document_id)->row();
        return view('vendor/com-sitac/preview', array(
            'document'  => $document_candidate,
        ));
    }

}