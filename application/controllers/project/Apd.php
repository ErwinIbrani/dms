<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Apd extends CI_Controller
{
	const UPLOAD_PATH = 'uploads/apd/';

	public function __construct()
	{
		parent::__construct();
		authentication($this->ion_auth->logged_in());
		$this->load->model(array('Project_Model', 'Document_Model'));
	}

	private function findProject($project_id)
	{
		$project = $this->Project_Model->findOne($project_id)->row();

		if(is_null($project)) {
			return show_error('Page not found', 404);
		}
		return $project;
	}

	public function addlist($project_id)
	{
		$project = $this->findProject($project_id);

		return view('project.apd.add_list', array(
			'project' => $project
		));
	}

	public function uploadlist($project_id)
	{
		$config = [];
		$config['upload_path'] = self::UPLOAD_PATH . 'list/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
		$config['max_size'] = '2000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);

		$project = $this->Project_Model->getWithSelectedVendor($project_id)->row();

		if (!$this->upload->do_upload('apd_list')) {
			$error = array('error' => $this->upload->display_errors());
			redirect("project/apd/addlist/" . $project_id, 'refresh');
		} else {
			$data = $this->upload->data();
			$file_name = self::UPLOAD_PATH . 'list/'.$project_id .'-'.$data['raw_name'] . $data['file_ext'];

			$project_document = array(
				'project_id' => $project->project_id,
				'vendor_id' => $project->vendor_id,
				'name' => 'APD LIST',
				'code' => '',
				'type' => 'APD',
				'path' => $file_name,
				'status' => 'submitted',
				'created_at' => date('Y-m-d H:i:s')
			);

			$document = $this->Document_Model->save($project_document);

			$docApd = $this->Document_Model->getCountSpecificDocument($project_document['project_id'], 'APD')->result_array();
			if (count($docApd) >= 5) {
				$this->Project_Model->update($project_document['project_id'], array('work_status' => 'RFC'));
			}
			$this->session->set_flashdata('success', 'Success upload document');
			redirect("/project/apd/addsite/" . $project_id, 'refresh');
		}
	}

	public function addsite($project_id)
	{
		$project = $this->findProject($project_id);
		return view('project.apd.add_site',  array(
			'project' => $project
		));
	}

	public function uploadsite($project_id)
	{
		$config = [];
		$config['upload_path'] = self::UPLOAD_PATH . 'site/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
		$config['max_size'] = '2000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);

		$project = $this->Project_Model->getWithSelectedVendor($project_id)->row();

		if (!$this->upload->do_upload('apd_site')) {
			$error = array('error' => $this->upload->display_errors());
			var_dump($error) or die;
			redirect("project/apd/addsite/" . $project_id, 'refresh');
		} else {
			$data = $this->upload->data();
			$file_name = self::UPLOAD_PATH . 'site/' .$project_id .'-'. $data['raw_name'] . $data['file_ext'];

			$project_document = array(
				'project_id' => $project->project_id,
				'vendor_id' => $project->vendor_id,
				'name' => 'APD SITE',
				'code' => '',
				'type' => 'APD',
				'path' => $file_name,
				'status' => 'submitted',
				'created_at' => date('Y-m-d H:i:s')
			);

			$docApd = $this->Document_Model->getCountSpecificDocument($project_document['project_id'], 'APD')->result_array();
			$document = $this->Document_Model->save($project_document);
			if (count($docApd) >= 5) {
				$this->Project_Model->update($project_document['project_id'], array('work_status' => 'RFC'));
			}

			$this->session->set_flashdata('success', 'Success upload document');
			redirect("/project/project/detail/" . $project_id, 'refresh');
		}
	}

}
