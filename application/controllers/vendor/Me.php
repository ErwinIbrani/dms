<?php

class Me extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Project_Model', 'Document_Model'));
	}

	/**
	 * @return bool
	 */
	public function index($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.me.index', array('project' => $project));
	}

	public function addgrounding()
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.me.form.grounding', array('project' => $project));
	}

	public function addme()
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.me.form.me', array('project' => $project));
	}

	public function addpln()
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.me.form.pln', array('project' => $project));
	}

	public function addextalarm()
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.me.form.extalarm', array('project' => $project));
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
