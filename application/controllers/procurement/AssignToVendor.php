<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Class AssignToVendor
 * Assign project to many vendor.
 */
class AssignToVendor extends CI_Controller
{
	/**
	 * AssignToVendor constructor.
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
	 * Get list of project that has assigned to vendors.
	 *
	 * @return bool
	 */
	public function index()
	{
		return view('procurement.assign_to_vendor.index');
	}

	/**
	 * @return bool
	 */
	public function add()
	{
		$vendor = $this->Vendor_Model->getAll();
		$project = $this->Project_Model->getAll();

		return view('procurement.assign_to_vendor.add', array(
			'vendors' => $vendor->result(),
			'projects' => $project->result(),
		));
	}

	/**
	 * Validator form
	 */
	protected function validator()
	{
		$this->form_validation->set_rules('vendor', 'Vendor', 'required');
	}

	/**
	 * Storing data to database
	 */
	public function store()
	{
		$this->validator();

		if($this->form_validation->run()) {
			var_dump($this->input->post());
		}


	}
}
