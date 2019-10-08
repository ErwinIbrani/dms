<?php

class Initiate extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Project_Model', 'Vendor_Model', 'User_Model'));
		authentication($this->ion_auth->logged_in());
	}

	public function index()
	{
		return view('project.initiate.index', array(

		));

	}
}
