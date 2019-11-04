<?php

class Foundation extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Project_Model', 'Document_Model'));
	}

	public function index($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.foundation.index', array(
			'project' => $project
		));
	}

	public function sitepreparation($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.foundation.form.site_preparation', array(
			'project' => $project
		));
	}

	public function excavation($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.foundation.form.excavation', array(
			'project' => $project
		));
	}

	public function rebarformwork($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.foundation.form.re_bar_form_works', array(
			'project' => $project
		));
	}

	public function foundationanchor($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.foundation.form.anchor', array(
			'project' => $project
		));
	}

	public function concreteproposal($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.foundation.form.concrete_proposal', array(
			'project' => $project
		));
	}

	public function pouringpreparation($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.foundation.form.pouring_preparation', array(
			'project' => $project
		));
	}

	public function readymix($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.foundation.form.ready_mix', array(
			'project' => $project
		));
	}

	public function concretepouring($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.foundation.form.concrete_pouring', array(
			'project' => $project
		));
	}

	public function drivenpile($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.foundation.form.driven_pile', array(
			'project' => $project
		));
	}

	public function wooddenpile($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.foundation.form.woodden_pile', array(
			'project' => $project
		));
	}

	public function borepreparation($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.foundation.form.bore_preparation', array(
			'project' => $project
		));
	}

	public function borepileactivity($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.foundation.form.bore_pile_activity', array(
			'project' => $project
		));
	}

	public function concretecuring($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.foundation.form.concrete_curing', array(
			'project' => $project
		));
	}

	public function shelterfoundation($project_id)
	{

	}

	public function permanentshelter($project_id)
	{

	}

	public function raftfoundation($project_id)
	{

	}

	public function towererection($project_id)
	{

	}

	public function towerpainting($project_id)
	{

	}

	public function towergrouting($project_id)
	{

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
