<?php

class Survey extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Candidate_Model', 'Project_Model'));
	}

	public function index($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();

		return view('vendor.candidate.document.survey', array(
			'candidate' => $candidate
		));
	}

}
