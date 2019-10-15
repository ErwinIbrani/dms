<?php

class Iw extends CI_Controller
{
	const UPLOAD_PATH = 'uploads/iw/';

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Candidate_Model', 'Project_Model', 'CandidateDocument_Model'));
		authentication($this->ion_auth->logged_in());
	}

	public function add($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
		$project = $this->Project_Model->findOne($candidate->project_id)->row();

		return view('vendor.candidate.document.iw.add', array(
			'candidate' => $candidate,
			'project' => $project
		));
	}

	public function persetujuan($candidate_id)
	{
		$config = [];
		$config['upload_path'] = './uploads/iw/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '2000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		$error = [];

//		&& !$this->upload->do_upload('denah_layout_izin_warga') && !$this->upload->do_upload('foto_copy_ktp_warga') && !$this->upload->do_upload('rekomendasi_desa') && !$this->upload->do_upload('rekomendasi_kecamatan')
		if (!$this->upload->do_upload('surat_persetujuan_lingkungan')) {
			$error = array('error' => $this->upload->display_errors());
			redirect("vendor/candidate/document/iw/add/" . $candidate_id, 'refresh');
		} else {
			$data = $this->upload->data();
			$file_name = self::UPLOAD_PATH . $data['raw_name'] . $data['file_ext'];
			$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
			$candidate_document = array(
				'candidate_id' => $candidate_id,
				'project_id' => $candidate->project_id,
				'vendor_id' => $candidate->vendor_id,
				'name' => 'Surat Persetujuan Lingkungan',
				'code' => 'FM-STP-018',
				'type' => 'SITAC',
				'path' => $file_name,
				'status' => 'submitted',
				'created_at' => date('Y-m-d H:i:s')
			);

			$document = $this->CandidateDocument_Model->save($candidate_document);

			$this->session->set_flashdata('success', 'Success upload document');
			redirect("vendor/candidate/document/iw/izinwarga/" . $candidate_id, 'refresh');
		}

	}

	public function izinwarga($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
		$project = $this->Project_Model->findOne($candidate->project_id)->row();

		return view('vendor.candidate.document.iw.denah_layout_izin_warga', array(
			'candidate' => $candidate,
			'project' => $project
		));
	}

	public function uploadizinwarga($candidate_id)
	{
		$config = [];
		$config['upload_path'] = './uploads/iw/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '2000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		$error = [];

		if (!$this->upload->do_upload('denah_layout_izin_warga')) {
			$error = array('error' => $this->upload->display_errors());
			redirect("vendor/candidate/document/iw/izinwarga/" . $candidate_id, 'refresh');
		} else {
			$data = $this->upload->data();
			$file_name = self::UPLOAD_PATH . $data['raw_name'] . $data['file_ext'];
			$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
			$candidate_document = array(
				'candidate_id' => $candidate_id,
				'project_id' => $candidate->project_id,
				'vendor_id' => $candidate->vendor_id,
				'name' => 'Denah Layout Izin Warga',
				'code' => 'FM-STP-018',
				'type' => 'SITAC',
				'path' => $file_name,
				'status' => 'submitted',
				'created_at' => date('Y-m-d H:i:s')
			);

			$document = $this->CandidateDocument_Model->save($candidate_document);
			$this->session->set_flashdata('success', 'Success upload document');
			redirect("vendor/candidate/document/iw/copyktp/" . $candidate_id, 'refresh');
		}

	}

	public function copyktp($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
		$project = $this->Project_Model->findOne($candidate->project_id)->row();

		return view('vendor.candidate.document.iw.foto_copy_ktp', array(
			'candidate' => $candidate,
			'project' => $project
		));
	}

	public function uploadcopyktp($candidate_id)
	{
		$config = [];
		$config['upload_path'] = './uploads/iw/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '2000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		$error = [];

		if (!$this->upload->do_upload('foto_copy_ktp_warga')) {
			$error = array('error' => $this->upload->display_errors());
			redirect("vendor/candidate/document/iw/copyktp/" . $candidate_id, 'refresh');
		} else {
			$data = $this->upload->data();
			$file_name = self::UPLOAD_PATH . $data['raw_name'] . $data['file_ext'];
			$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
			$candidate_document = array(
				'candidate_id' => $candidate_id,
				'project_id' => $candidate->project_id,
				'vendor_id' => $candidate->vendor_id,
				'name' => 'Foto copy KTP Warga',
				'code' => '',
				'type' => 'SITAC',
				'path' => $file_name,
				'status' => 'submitted',
				'created_at' => date('Y-m-d H:i:s')
			);

			$document = $this->CandidateDocument_Model->save($candidate_document);
			$this->session->set_flashdata('success', 'Success upload document');
			redirect("vendor/candidate/document/iw/rekdesa/" . $candidate_id, 'refresh');
		}

	}

	public function rekdesa($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
		$project = $this->Project_Model->findOne($candidate->project_id)->row();

		return view('vendor.candidate.document.iw.rekomendasi_desa', array(
			'candidate' => $candidate,
			'project' => $project
		));
	}

	public function uploadrekdesa($candidate_id)
	{
		$config = [];
		$config['upload_path'] = './uploads/iw/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '2000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		$error = [];

		if (!$this->upload->do_upload('rekomendasi_desa')) {
			$error = array('error' => $this->upload->display_errors());
			redirect("vendor/candidate/document/iw/rekdesa/" . $candidate_id, 'refresh');
		} else {
			$data = $this->upload->data();
			$file_name = self::UPLOAD_PATH . $data['raw_name'] . $data['file_ext'];
			$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
			$candidate_document = array(
				'candidate_id' => $candidate_id,
				'project_id' => $candidate->project_id,
				'vendor_id' => $candidate->vendor_id,
				'name' => 'Rekomendasi Desa',
				'code' => '',
				'type' => 'SITAC',
				'path' => $file_name,
				'status' => 'submitted',
				'created_at' => date('Y-m-d H:i:s')
			);

			$document = $this->CandidateDocument_Model->save($candidate_document);
			$this->session->set_flashdata('success', 'Success upload document');
			redirect("vendor/candidate/document/iw/rekkecamatan/" . $candidate_id, 'refresh');
		}

	}

	public function rekkecamatan($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
		$project = $this->Project_Model->findOne($candidate->project_id)->row();

		return view('vendor.candidate.document.iw.rekomendasi_kecamatan', array(
			'candidate' => $candidate,
			'project' => $project
		));
	}

	public function uploadrekkecamatan($candidate_id)
	{
		$config = [];
		$config['upload_path'] = './uploads/iw/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '2000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		$error = [];

		if (!$this->upload->do_upload('rekomendasi_kecamatan')) {
			$error = array('error' => $this->upload->display_errors());
			redirect("vendor/candidate/document/iw/rekkecamatan/" . $candidate_id, 'refresh');
		} else {
			$data = $this->upload->data();
			$file_name = self::UPLOAD_PATH . $data['raw_name'] . $data['file_ext'];
			$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
			$candidate_document = array(
				'candidate_id' => $candidate_id,
				'project_id' => $candidate->project_id,
				'vendor_id' => $candidate->vendor_id,
				'name' => 'Rekomendasi Kecamatan',
				'code' => '',
				'type' => 'SITAC',
				'path' => $file_name,
				'status' => 'submitted',
				'created_at' => date('Y-m-d H:i:s')
			);

			$document = $this->CandidateDocument_Model->save($candidate_document);
			$this->session->set_flashdata('success', 'Success upload document');
			redirect("vendor/candidate/document/iw/rekkecamatan/" . $candidate_id, 'refresh');
		}

	}

}
