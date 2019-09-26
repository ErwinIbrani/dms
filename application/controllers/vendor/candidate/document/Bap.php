<?php

use PhpOffice\PhpWord\TemplateProcessor;

class Bap extends CI_Controller {

	protected $attribute = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Candidate_Model', 'Project_Model', 'CandidateDocument_Model'));
	}

	public function add($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();

		return view('vendor.candidate.document.bap.add_bap', array(
			'candidate' => $candidate
		));
	}

	public function store($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->result_array();

		$this->attribute['candidate'] = $candidate;
		$this->attribute['bap'] = $this->input->post();

		$candidate_document = array(
			'project_id' => $candidate[0]['project_id'],
			'vendor_id' => $candidate[0]['vendor_id'],
			'name' => 'BAP',
			'code' => 'FM-SPA-006',
			'type' => 'SITAC',
			'attribute' => json_encode($this->attribute),
			'status' => 'submited'
		);


		$document = $this->CandidateDocument_Model->save($candidate_document);
		return redirect('/vendor/candidate/document/bap/preview/'.$document);
	}

	public function preview($document_id)
	{
		$document_candidate = $this->CandidateDocument_Model->findOne($document_id)->row();
		$attribute = json_decode($document_candidate->attribute);
		$arrContextOptions=array(
			"ssl"=>array(
				"verify_peer"=>false,
				"verify_peer_name"=>false,
			),
		);

//		$document = file_get_contents(,  false, stream_context_create($arrContextOptions));
		$arrContextOptions = array(
			"ssl" => array(
				"verify_peer" => false,
				"verify_peer_name" => false,
			),
		);
		stream_context_set_default($arrContextOptions);

		$template = new TemplateProcessor(base_url('documents/sitac/BAP.docx'));

		$template->setValue('site_id', 'Nama site id');

		$template->saveAs('bape');

		var_dump($template) or die;
		return view('vendor.candidate.document.bap.preview', array(
			'candidate' => $attribute->candidate[0],
			'bap' => $attribute->bap
		));
	}

}
