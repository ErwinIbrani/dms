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

		$document_id = $this->CandidateDocument_Model->save($candidate_document);

		$api_endpoint = "https://selectpdf.com/api2/convert/";
		$key = 'c47ec71b-a145-4814-ba08-8769c4c0f45f';
		$test_url = site_url('/vendor/candidate/document/bap/layout/'. $document_id);

		$parameters = array ('key' => $key, 'url' => $test_url, 'web_page_width' => '816', 'page_numbers' => 'False');

		$result = @file_get_contents("$api_endpoint?" . http_build_query($parameters));

		if (!$result) {
			echo "HTTP Response: " . $http_response_header[0] . "<br/>";

			$error = error_get_last();
			echo "Error Message: " . $error['message'];
		}
		else {
			$local_file = './uploads/bap/BAP-'.time().'.pdf';
			file_put_contents($local_file, $result);
			$this->CandidateDocument_Model->update($document_id, array('path' => $local_file));
			return redirect('/vendor/candidate/document/bap/preview/' . $document_id);
		}

	}

	public function preview($document_id)
	{
		$document_candidate = $this->CandidateDocument_Model->findOne($document_id)->row();
		$attribute = json_decode($document_candidate->attribute);

		$candidate = $attribute->candidate[0];
		$project = $this->Project_Model->findOne($candidate->project_id)->row();
		$candidate_bap = $attribute->bap;
		return view('vendor.candidate.document.preview', array(
			'candidate' => $attribute->candidate[0],
			'document' => $document_candidate
		));
	}

	public function layout($document_id)
	{
		$document_candidate = $this->CandidateDocument_Model->findOne($document_id)->row();
		$attribute = json_decode($document_candidate->attribute);

		$candidate = $attribute->candidate[0];
		$project = $this->Project_Model->findOne($candidate->project_id)->row();
		$candidate_bap = $attribute->bap;

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

		return view('vendor.candidate.document.bap.layout', array(
			'day' => $day,
			'date' => date('d - m - Y', strtotime($candidate_bap->offer_date)),
			'site_id' => $project->site_id_ibs,
			'site_name' => $project->site_name,
			'long' => $candidate->long,
			'lat' => $candidate->lat,
			'site_address' => $project->address,
			'owner_name' => ucwords($candidate->owner_name),
			'owner_id_card' => $candidate->id_card,
			'owner_phone' => $candidate->phone_number,
			'owner_fax' => (!empty($candidate->fax)) ? $candidate->fax : '-',
			'owner_address' => $candidate->owner_address,
			'authorized_name' => (!empty($candidate_bap->authorized_name)) ? $candidate_bap->authorized_name : '-',
			'authorized_id_card' => (!empty($candidate_bap->authorized_id_card)) ? $candidate_bap->authorized_id_card : '-',
			'authorized_phone' => (!empty($candidate_bap->authorized_phone)) ? $candidate_bap->authorized_phone : '-',
			'authorized_address' => (!empty($candidate_bap->authorized_address)) ? $candidate_bap->authorized_address : '-',
			'type' => $candidate_bap->building_type,
			'rent_price' => number_format($candidate_bap->rent_price, 0, ',', '.'),
			'rent_period' => $candidate_bap->rent_period,
			'space_dimension' => $candidate_bap->space_dimension,
			'access_road' => $candidate_bap->access_road,
			'access_road_type' => $candidate_bap->access_road_type,
			'ppn' => $candidate_bap->ppn,
			'pph' => $candidate_bap->pph,
			'notary_fee' => $candidate_bap->notary_fee,
			'electricity_cost' => $candidate_bap->electricity_cost,
			'note' => $candidate_bap->note
		));
	}

}
