<?php

class Detail extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Project_Model', 'Candidate_Model'));
	}

	public function index($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id);

		$project = $this->Project_Model->findOne($candidate->row()->project_id);

		return view('vendor.candidate.detail', array(
			'candidate' => $candidate->row(),
			'project' => $project->row()
		));
	}
}
