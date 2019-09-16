<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Candidate_Model');
	}

	protected function validator()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('long', 'Long', 'required');
		$this->form_validation->set_rules('lat', 'Lat', 'required');
		$this->form_validation->set_rules('address', 'Lat', 'required');
	}

	public function create($project_id)
	{
		return view('vendor.candidate.create', array(
			'project_id' => $project_id
		));
	}

	public function store($project_id)
	{
		$this->validator();

		if($this->form_validation->run()) {
			$this->Candidate_Model->storeData($this->input->post());
			$this->session->set_flashdata('success', 'Data Inserted');
			return redirect("vendor/project", 'refresh');
		} else {
			return $this->create($project_id);
		}
	}
}
