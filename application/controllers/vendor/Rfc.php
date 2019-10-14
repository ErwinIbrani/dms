<?php

class Rfc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		authentication($this->ion_auth->logged_in());
		$this->load->model(array('Project_Model', 'Imb_Model', 'Legal_Model'));
	}

	public function imb($project_id)
	{
		$project = $project = $this->findProject($project_id);
		$documents = $this->Imb_Model->getByWbsId($project->wbs_id)->result();

		return view('vendor.rfc.imb', array(
			'documents' => $documents,
			'project' => $project
		));
	}

	public function legal($project_id)
	{
		$project = $project = $this->findProject($project_id);
		$documents = $this->Legal_Model->getByWbsId($project->wbs_id)->result();

		return view('vendor.rfc.legal', array(
			'documents' => $documents,
			'project' => $project
		));
	}

	private function findProject($project_id)
	{
		$project = $this->Project_Model->findOne($project_id)->row();

		if(is_null($project)) {
			return show_error('Page not found', 404);
		}
		return $project;
	}
}
