<?php

class Bap extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Candidate_Model', 'Project_Model'));
	}

	public function add($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();

		return view('vendor.candidate.document.add_bap', array(
			'candidate' => $candidate
		));
	}

}
