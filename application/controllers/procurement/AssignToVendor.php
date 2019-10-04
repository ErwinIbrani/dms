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
			'Project_Model',
			'project_assigment_model'
		));

		authentication($this->ion_auth->logged_in());
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

			$data = json_decode(json_encode($this->input->post()));

			for ($i = 0;$i < count($data->assign_wbs);$i++) {
				$data_collection = array(
					'vendor_id' => (int) $data->vendor,
					'project_id' => (int) $data->assign_wbs[$i],
					'assignment_type' => $data->assign_type[$i],
					'status' => 1 // this vendor is used when status set to 1.
				);

				$this->project_assigment_model->insert($data_collection);
			}

			echo json_encode(array('data' => array(
				'success' => 'success proccess assigment vendor to many project.'
			)));
		} else {
			echo json_encode(['error proccess assigment vendor to many project.']);
		}


	}
}
