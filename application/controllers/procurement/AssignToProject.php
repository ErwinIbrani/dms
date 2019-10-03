<?php


/**
 * Class AssignToProject
 * Assign to vendor to many project
 */
class AssignToProject extends CI_Controller
{
	/**
	 * AssignToProject constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			'Vendor_Model',
			'Project_Model'
		));
	}

	/**
	 * Get list of vendor that has assigned to projects.
	 *
	 * @return bool
	 */
	public function index()
	{
		return view('procurement.assign_to_project.index');
	}

	/**
	 * @return bool
	 */
	public function add()
	{

		$vendor = $this->Vendor_Model->getAll();
		$project = $this->Project_Model->getAll();

		return view('procurement.assign_to_project.add', array(
			'vendors' => $vendor->result(),
			'projects' => $project->result(),
		));
	}

	/**
	 * Validator form
	 */
	protected function validator()
	{
		$this->form_validation->set_rules('project', 'Project', 'required');
	}

	/**
	 * Storing data to database
	 */
	public function store()
	{
		$this->validator();

		if($this->form_validation->run()) {
			//var_dump($this->input->post());
			$this->session->set_flashdata('success', 'Data Inserted');
			return redirect("/procurement/project/", 'refresh');
		} else {

		}


	}
}
