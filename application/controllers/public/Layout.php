<?php

class Layout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('CandidateDocument_Model', 'Project_Model'));
	}

	private function getDayName($date)
	{
		$day = '';
		switch (date('N', strtotime($date))) {
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

		return $day;
	}

	public function bap($document_id)
	{
		$document_candidate = $this->CandidateDocument_Model->findOne($document_id)->row();
		$attribute = json_decode($document_candidate->attribute);

		$candidate = $attribute->candidate[0];
		$project = $this->Project_Model->findOne($candidate->project_id)->row();
		$candidate_bap = $attribute->bap;
		$day = $this->getDayName($candidate_bap->offer_date);


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
