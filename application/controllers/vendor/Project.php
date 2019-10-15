<?php

class Project extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Project_Model', 'Candidate_Model'));
		authentication($this->ion_auth->logged_in());
	}

	public function index()
	{
		$projects = $this->Project_Model
			->getAllByStatusAndVendor('project.id,project.wbs_id, project.iro_number, project.site_id_ibs, project.site_name, 
			project.status, project_assigment.assignment_type', 'New', 1, false);

		return view('vendor.project.new_project', array(
			'projects' => $projects->result(),
			'vendor_id' => 1
		));
	}

	public function onProcess()
	{
		$projects = $this->Project_Model
			->getAllByStatusAndVendor('project.id,project.wbs_id, project.iro_number, project.site_id_ibs, project.site_name, 
			project.status, project_assigment.assignment_type', 'on process', 1, false);

		return view('vendor.project.on_process', array(
			'projects' => $projects->result(),
			'vendor_id' => 1
		));
	}

	public function done()
	{
		$projects = $this->Project_Model
			->getAllByStatusAndVendor('project.id,project.wbs_id, project.iro_number, project.site_id_ibs, project.site_name, 
			project.status, project_assigment.assignment_type', 'done', 1, false);

		return view('vendor.project.done_project', array(
			'projects' => $projects->result(),
			'vendor_id' => 1
		));
	}

	public function details($project_id, $vendor_id)
	{
		$project = $this->Project_Model->findOne($project_id);
		$candidates = $this->Candidate_Model->getByProject($project_id, $vendor_id);

		//var_dump($project->result()[0]) or die;
		return view('vendor.project.details.index', array(
			'project' => $project->result()[0],
			'candidates' => $candidates->result(),
			'vendor_id' => $vendor_id
		));
	}

	public function candidate($candidate) {

	}

}
