<?php

class Initiate extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Project_Model', 'Vendor_Model', 'User_Model','DocumentSetting_Model'));
		authentication($this->ion_auth->logged_in());
	}

	public function create()
	{
        $this->make_bread->add('Index');
        $breadcrumb = $this->make_bread->output();
        $projects   = $this->Project_Model->project()->result();
        $users_pic  = $this->User_Model->UserIBS()->result();
        $document_setting = $this->DocumentSetting_Model->documentsetting()->result();
		return view('project.initiate.create', array(
           'projects'          => $projects,
           'users_pic'         => $users_pic,
           'document_settings' => $document_setting,
           'breadcrumb'        => $breadcrumb
		));

	}
}
