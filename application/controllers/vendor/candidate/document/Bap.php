<?php

use PhpOffice\PhpWord\TemplateProcessor;

class Bap extends CI_Controller
{

	protected $attribute = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Candidate_Model', 'Project_Model', 'CandidateDocument_Model'));
	}

	public function add($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
		$project = $this->Project_Model->findOne($candidate->project_id)->row();

		//var_dump($project) or die;
		return view('vendor.candidate.document.bap.add_bap', array(
			'candidate' => $candidate,
			'project' => $project
		));
	}

	public function store($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->result_array();

		$this->attribute['candidate'] = $candidate;
		$this->attribute['bap'] = $this->input->post();


		$candidate_document = array(
			'candidate_id' => $candidate_id,
			'project_id' => $candidate[0]['project_id'],
			'vendor_id' => $candidate[0]['vendor_id'],
			'name' => 'BAP',
			'code' => 'FM-SPA-006',
			'type' => 'SITAC',
			'attribute' => json_encode($this->attribute),
			'status' => 'submitted',
			'created_at' => date('Y-m-d H:i:s')
		);

		$document = $this->CandidateDocument_Model->save($candidate_document);
		return redirect('/vendor/candidate/document/bap/preview/' . $document);
	}

	public function preview($document_id)
	{
		$document_candidate = $this->CandidateDocument_Model->findOne($document_id)->row();
		$attribute = json_decode($document_candidate->attribute);

		$arrContextOptions = array(
			"ssl" => array(
				"verify_peer" => false,
				"verify_peer_name" => false,
			),
		);
		stream_context_set_default($arrContextOptions);

		$candidate = $attribute->candidate[0];
		$project = $this->Project_Model->findOne($candidate->project_id)->row();
		$candidate_bap = $attribute->bap;

		$template = new TemplateProcessor(base_url('documents/sitac/BAP.docx'));

		switch (date('N', strtotime($candidate_bap->offer_date))) {
			case '1':
				$day = 'Senin';
				break;
			case '2':
				$day = 'Selasa';
				break;
			case '3':
				$day = 'Rabu';
				break;
			case '4':
				$day = 'Kamis';
				break;
			case '5':
				$day = 'Jum\'at';
				break;
			case '6':
				$day = 'Sabtu';
				break;
			case '7':
				$day = 'Minggu';
				break;


		}

		$template->setValue(array(
			'day',
			'date',
			'site_id',
			'site_name',
			'long',
			'lat',
			'site_address',
			'owner_name',
			'owner_id_card',
			'owner_phone',
			'owner_fax',
			'owner_address',
			'authorized_name',
			'authorized_id_card',
			'authorized_phone',
			'authorized_address',
			'type',
			'rent_price',
			'rent_period',
			'space_dimension',
			'access_road',
			'access_road_type',
			'ppn',
			'pph',
			'notary_fee',
			'electricity_cost',
			'note',), array(
			$day,
			date('d - m - Y', strtotime($candidate_bap->offer_date)),
			$project->site_id_ibs,
			$project->site_name,
			$candidate->long,
			$candidate->lat,
			$project->address,
			ucwords($candidate->owner_name),
			$candidate->id_card,
			$candidate->phone_number,
			(!empty($candidate->fax)) ? $candidate->fax : '-',
			$candidate->owner_address,
			(!empty($candidate_bap->authorized_name)) ? $candidate_bap->authorized_name : '-',
			(!empty($candidate_bap->authorized_id_card)) ? $candidate_bap->authorized_id_card : '-',
			(!empty($candidate_bap->authorized_phone)) ? $candidate_bap->authorized_phone : '-',
			(!empty($candidate_bap->authorized_address)) ? $candidate_bap->authorized_address : '-',
			$candidate_bap->building_type,
			number_format($candidate_bap->rent_price, 0, ',', '.'),
			$candidate_bap->rent_period,
			$candidate_bap->space_dimension,
			$candidate_bap->access_road,
			$candidate_bap->access_road_type,
			$candidate_bap->ppn,
			$candidate_bap->pph,
			$candidate_bap->notary_fee,
			$candidate_bap->electricity_cost,
			$candidate_bap->note));



		$file_name = 'uploads/bap/BAP-'. str_slug($candidate->name) .'_'. time() .'.docx';
		$template->saveAs($file_name);
		$this->CandidateDocument_Model->update($document_id, array('path' => $file_name));

		return view('vendor.candidate.document.preview', array(
			'candidate' => $attribute->candidate[0],
			'document' => $document_candidate
		));
	}

}
