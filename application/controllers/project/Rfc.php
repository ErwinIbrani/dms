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

		return view('project.rfc.imb', array(
			'documents' => $documents,
			'project' => $project
		));
	}

	public function legal($project_id)
	{
		$project = $project = $this->findProject($project_id);
		$documents = $this->Legal_Model->getByWbsId($project->wbs_id)->result();

		return view('project.rfc.legal', array(
			'documents' => $documents,
			'project' => $project
		));
	}

	public function setrfcdone($project_id)
	{

		$project = $this->findProject($project_id);
		$this->Project_Model->update($project_id, array('work_status' => 'KOM CME'));
		$this->session->set_flashdata('success', 'Success RFC Done.');
		redirect("/project/project/detail/" . $project_id, 'refresh');
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
