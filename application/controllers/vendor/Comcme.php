<?php

class Comcme extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function letter($project_id)
	{
		return view('vendor.cme.com_cme.letter_com.list');
	}
}
