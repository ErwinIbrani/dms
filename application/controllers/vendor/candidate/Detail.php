<?php

class Detail extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Project_Model', 'Candidate_Model', 'CandidateDocument_Model'));
		authentication($this->ion_auth->logged_in());
	}

	public function index($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id);

		$project = $this->Project_Model->findOne($candidate->row()->project_id);

		$candidate_document_tssr = $this->CandidateDocument_Model->getCandidateDocument($candidate->row()->project_id, $candidate_id, 'SURVEY');
		$candidate_document_bap = $this->CandidateDocument_Model->getCandidateDocument($candidate->row()->project_id, $candidate_id, 'BAP');
		$candidate_document_bak = $this->CandidateDocument_Model->getCandidateDocument($candidate->row()->project_id, $candidate_id, 'BAK');
		$candidate_document_iw = $this->CandidateDocument_Model->getWhereType($candidate->row()->project_id, $candidate_id, 'IW');

		return view('vendor.candidate.detail', array(
			'candidate' => $candidate->row(),
			'project' => $project->row(),
			'document_tssr' => $candidate_document_tssr->result(),
			'document_bap' => $candidate_document_bap->result(),
			'document_bak' => $candidate_document_bak->result(),
			'document_iw' => $candidate_document_iw->result(),
		));
	}
}
