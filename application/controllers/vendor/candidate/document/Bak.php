<?php

class Bak extends CI_Controller
{
	public $attribute = [];

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

	public function store($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->result_array();

		$this->attribute['candidate'] = $candidate;
		$this->attribute['bak'] = $this->input->post();


		$candidate_document = array(
			'candidate_id' => $candidate_id,
			'project_id' => $candidate[0]['project_id'],
			'vendor_id' => $candidate[0]['vendor_id'],
			'name' => 'BAK',
			'code' => 'FM-SPA-006',
			'type' => 'SITAC',
			'attribute' => json_encode($this->attribute),
			'status' => 'submitted',
			'created_at' => date('Y-m-d H:i:s')
		);

		$document_id = $this->CandidateDocument_Model->save($candidate_document);
		return redirect('/vendor/candidate/document/bak/layout/' . $document_id);
	}

	public function preview($document_id)
	{

		$api_endpoint = "https://selectpdf.com/api2/convert/";
		$key = '5db29d9c-4e55-4c2a-8adc-2cb1ed97669b';
		$test_url = site_url('/vendor/candidate/document/bak/layout/' . $document_id);

		$parameters = array('key' => $key, 'url' => $test_url, 'web_page_width' => '816', 'page_numbers' => 'False');

		$result = @file_get_contents("$api_endpoint?" . http_build_query($parameters));

		if (!$result) {
			echo "HTTP Response: " . $http_response_header[0] . "<br/>";

			$error = error_get_last();
			echo "Error Message: " . $error['message'];
		} else {
			// set HTTP response headers
			header("Content-Type: application/pdf");
			header("Content-Disposition: attachment; filename=\"test.pdf\"");

			echo($result);
		}
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
		$candidate_bak = $attribute->bak;

		switch (date('N', strtotime($candidate_bak->negotiation_at))) {
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

		if (property_exists($candidate_bak, 'pph')) {
			$pph = true;
		} else {
			$pph = false;
		}

		if (property_exists($candidate_bak, 'non_pkp')) {
			$non_pkp = true;
		} else {
			$non_pkp = false;
		}

		if (property_exists($candidate_bak, 'pkp')) {
			$pkp = true;
		} else {
			$pkp = false;
		}


		return view('vendor.candidate.document.bak.layout', array(
			'negotiation_by' => $candidate_bak->negotiation_by,
			'day' => $day,
			'date' => date('d', strtotime($candidate_bak->negotiation_at)),
			'month' => date('m', strtotime($candidate_bak->negotiation_at)),
			'year' => date('Y', strtotime($candidate_bak->negotiation_at)),
			'first_person' => $candidate_bak->first_person,
			'second_person' => $candidate_bak->second_person,
			'site_id' => $project->site_id_ibs,
			'site_name' => $project->site_name,
			'owner_name' => ucwords($candidate->owner_name),
			'owner_type' => $candidate_bak->owner_type,
			'owner_phone_number' => $candidate->phone_number,
			'owner_address' => $candidate->owner_address,
			'authorized_name' => (!empty($candidate_bak->authorized_name)) ? $candidate_bak->authorized_name : '-',
			'authorized_id_card' => (!empty($candidate_bak->authorized_id_card)) ? $candidate_bak->authorized_id_card : '-',
			'authorized_phone' => (!empty($candidate_bak->authorized_phone)) ? $candidate_bak->authorized_phone : '-',
			'authorized_address' => (!empty($candidate_bak->authorized_address)) ? $candidate_bak->authorized_address : '-',
			'land_type' => ucwords($candidate_bak->land_type),
			'total_price_rent' => number_format($candidate_bak->total_price_rent, 0, ',', '.'),
			'be_regarded' => $candidate_bak->be_regarded,
			'rental_period' => $candidate_bak->rental_period,
			'payment_type' => ucwords($candidate_bak->payment_type),
			'bank_name' => $candidate_bak->bank_name,
			'account_number' => $candidate_bak->account_number,
			'account_name' => $candidate_bak->account_name,
			'phase_1_percent' => $candidate_bak->phase_1_percent,
			'phase_1_nominal' => number_format($candidate_bak->phase_1_nominal, 0, ',', '.'),
			'pahase_2_percent' => $candidate_bak->phase_2_percent,
			'phase_2_nominal' => number_format($candidate_bak->phase_2_nominal, 0, ',', '.'),
			'note' => (!empty($candidate_bak->note)) ? $candidate_bak->note : '-',
			'bumi' => $candidate_bak->bumi,
			'bangunan' => $candidate_bak->bangunan,
			'space_dimension' => 12,
			'access_road' => 12,
			'non_pkp' => $non_pkp,
			'pph' => $pph,
			'rent_object_status' => $candidate_bak->rent_object_status,
			'rent_object_status' => $candidate_bak->rent_object_status,
			'status_hak_object' => $candidate_bak->status_hak_object,
			'status_hak_object_nomor' => $candidate_bak->status_hak_object_nomor,
			'status_hak_object_lain' => $candidate_bak->status_hak_object_lain,
			'user_ibs_name' => $candidate_bak->user_ibs_name,
			'user_ibs_position' => $candidate_bak->user_ibs_position,
			'saksi_1_name' => $candidate_bak->saksi_1_name,
			'saksi_2_name' => $candidate_bak->saksi_2_name,
		));
	}
}
