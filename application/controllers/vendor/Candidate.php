<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Candidate_Model', 'Project_Model'));
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
		$project = $this->Project_Model->findOne($project_id)->result();

		return view('vendor.candidate.create', array(
			'project' => $project[0]
		));
	}

	public function store($project_id)
	{
		$this->validator();

		if($this->form_validation->run()) {
			$candidate = $this->Candidate_Model->storeData($this->input->post());
			$this->session->set_flashdata('success', 'Candidate was added, complete the following document for this candidate.');
			return redirect("vendor/candidate/document/" . $candidate, 'refresh');
		} else {
			return $this->create($project_id);
		}
	}

	public function document($candidate_id)
	{
		return view('vendor.candidate.document', array(
			'candidate' => $this->Candidate_Model->getCandidateById($candidate_id)->result()
		));
	}
}
