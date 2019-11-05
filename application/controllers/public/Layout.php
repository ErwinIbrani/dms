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
			'note' => $candidate_bap->note,
			'pic_ibs' => $candidate_bap->pic_ibs
		));
	}

	public function bak($document_id)
	{
		$document_candidate = $this->CandidateDocument_Model->findOne($document_id)->row();
		$attribute = json_decode($document_candidate->attribute);

		$candidate = $attribute->candidate[0];
		$project = $this->Project_Model->findOne($candidate->project_id)->row();
		$candidate_bak = $attribute->bak;

		$day = $this->getDayName($candidate_bak->negotiation_at);

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
			'pkp' => $pkp,
			'pph' => $pph,
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

	public function komcme($document_id)
	{
		$document_candidate = $this->CandidateDocument_Model->findOne($document_id)->row();
		$attribute = json_decode($document_candidate->attribute);

		return view('vendor.cme.com_cme.layout.komcme', array());
	}

	public function komcmepernyataan($document_id)
	{
		$document_candidate = $this->CandidateDocument_Model->findOne($document_id)->row();
		$attribute = json_decode($document_candidate->attribute);

		return view('vendor.cme.com_cme.layout.kompernyataan', array());
	}
}
