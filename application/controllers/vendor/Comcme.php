<?php

class Comcme extends CI_Controller {

	/**
	 * Comcme constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Project_Model', 'Document_Model'));
	}

	/**
	 * The first access when user access kom cme page.
	 * it's will display link to generate form, and list document that has generated.
	 *
	 * @param $project_id
	 * @return bool
	 */
	public function letter($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.com_cme.letter_com.list', array(
			'project' => $project
		));
	}

	/**
	 * Generate Document KOM CME
	 *
	 * @param $project_id
	 * @return bool
	 */
	public function generatekomcme($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.com_cme.letter_com.form_com_cme', array(
			'project' => $project
		));
	}

	public function layoutkomcme()
	{

	}

	/**
	 * Generate Document Surat Pernyataan KON CME
	 *
	 * @param $project_id
	 * @return bool
	 */
	public function generatekomletter($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.com_cme.letter_com.form_surat_pernyataan', array(
			'project' => $project
		));
	}

	public function layoutkomletter()
	{

	}

	/**
	 * Upload form for document KOM CME
	 *
	 * @param $project_id
	 * @return bool
	 */
	public function uploadform($project_id)
	{
		$project = $this->findProjectById($project_id);

		return view('vendor.cme.com_cme.letter_com.upload_form', array(
			'project_id' => $project_id
		));
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
