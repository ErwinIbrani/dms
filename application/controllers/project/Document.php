<?php

class Document extends CI_Controller
{
    public function __Construct()
    {
        parent ::__construct();
        $this->load->model(['InternalUser_Model', 'Project_Model', 'Pic_Model', 'User_Model', 'Document_Model']);
        $this->load->helper('custom');
        authentication($this->ion_auth->logged_in());
    }

    public function create()
    {
        $this->make_bread->add('Index', 'project/document/index', TRUE);
        $this->make_bread->add('Create');
        $breadcrumb = $this->make_bread->output();
        $projects   = $this->Project_Model->project()->result();

        return view('project/document/create', [
            'projects'   =>  $projects,
            'breadcrumb' =>  $breadcrumb
        ]);
    }

    public function store()
    {

    }

}