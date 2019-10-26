<?php

class Candidate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Candidate_Model', 'Project_Model', 'CandidateDocument_Model'));
	}

	public function select($project_id, $candidate_id)
	{
		$this->Candidate_Model->update($candidate_id, array('has_selected' => 1));
		$this->Project_Model->update($project_id, array('candidate_selected' => $candidate_id));
		return redirect(site_url('/project/project/detail/'.$project_id));
	}

}
