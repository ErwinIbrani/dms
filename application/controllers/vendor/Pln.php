<?php

class Pln extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Project_Model', 'Document_Model'));
	}

	public function index($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.pln.index', array('project' => $project));
	}



	/**
	 * Find project by ID of the project.
	 *
	 * @param $project_id
	 * @return mixed
	 */
	private function findProjectById($project_id)
	{
		$project = $this->Project_Model->findOne($project_id);
		return $project->row();
	}
}
