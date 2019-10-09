<?php

class Bak extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Candidate_Model', 'Project_Model', 'CandidateDocument_Model'));
	}

	public function add($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
		$project = $this->Project_Model->findOne($candidate->project_id)->row();

		return view('vendor.candidate.document.bak.add', array(
			'candidate' => $candidate,
			'project' => $project
		));
	}
}
