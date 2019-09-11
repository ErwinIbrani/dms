<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserManagement extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('InternalUser_Model');
        $this->load->model('VendorUser_Model');
		$this->load->model('UserGroup_Model');
		$this->load->model('Vendor_Model');

        authentication($this->ion_auth->logged_in());
    }

    public function index($page = 0, $search = null)
    {
    	$this->title = 'User';


    	$search = null;
		$totalRow = $this->InternalUser_Model->getCount($search);
		//var_dump($totalRow) or die;
		$dataSource = $this->InternalUser_Model->getData($search);

		// Column settings
		$columns = array(
//			"id"=>array("header"=>"User ID", "type"=>"label"),
			"username"=>array("header"=>"Username", "type"=>"link", 'href' => site_url('profile')),
			"email"=>array("header"=>"Email", "type"=>"label"),
			"level"=>array("header"=>"Level", "type"=>"label"),
		);

		// Set the grid
		$this->smartgrid->set_grid($dataSource, $columns, ['page_size' => 10, 'total_row' => $totalRow]);

		// Render the grid and assign to data array, so it can be print to on the view
		$data['grid_html'] = $this->smartgrid->render_grid();

		return view('admin.user.internal.index', array(
        	'title' => $this->title,
			'users' => $data,
			'pagination' => null,
			'data' => $data
		));
    }

	public function create()
	{
//		$this->title = 'Add New User';
//		return view('admin.user.internal.create', array(
//			'title' => $this->title
//		));
		
		$username = 'Faisal Nasirudin';
		$password = 'password';
		$email = 'faisal.nas@gmail.com';
		$additional_data = array(
			'type' => 'vendor',
			'level' => 'Supervisor',
		);
		$group = array('1', '2'); // Sets user to admin.

		$this->ion_auth->register($username, $password, $email, $additional_data, $group);
    }

	public function storeData()
	{
		
    }

	protected function validatorVendor($isNew) {
		if($isNew) {
			$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]',
				array('is_unique' => 'This %s already exists.'));
			$this->form_validation->set_rules('password', 'Password', 'required');
		} else {
			$this->form_validation->set_rules('email', 'Email', 'required');
		}

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('vendor', 'Vendor', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('role[]', 'role', 'required');
	}

	public function vendor($page = 0)
	{
		$search = null;
		$totalRow = $this->VendorUser_Model->getCount($search);
		//var_dump($totalRow) or die;
		$dataSource = $this->VendorUser_Model->getData($search);

		// Column settings
		$columns = array(
//			"id"=>array("header"=>"User ID", "type"=>"label"),
			"username"=>array("header"=>"Username", "type"=>"link", 'href' => site_url('admin/usermanagement/edituservendor/{id}')),
			"email"=>array("header"=>"Email", "type"=>"label"),
			"level"=>array("header"=>"Level", "type"=>"label"),
		);

		// Set the grid
		$this->smartgrid->set_grid($dataSource, $columns, array('page_size' => 10, 'total_row' => $totalRow));

		// Render the grid and assign to data array, so it can be print to on the view
		$data['grid_html'] = $this->smartgrid->render_grid();

		return view('admin.user.vendor.index', array(
			'data' => $data
		));
    }

	public function createUserVendor()
	{
		$groups = $this->UserGroup_Model->getData();
		$vendors = $this->Vendor_Model->vendor();

		return view('admin.user.vendor.create', array(
			'groups' => $groups->result(),
			'vendors' => $vendors->result()
		));
    }

	public function storeUserVendor()
	{
		$this->validatorVendor(true);

		if($this->form_validation->run()) {
			$this->VendorUser_Model->storeData($this->input->post());
			$this->session->set_flashdata('success', 'Data Inserted');
			return redirect("admin/user-management/vendor", 'refresh');
		} else {
			return $this->createUserVendor();
		}

    }

	public function editUserVendor($id)
	{
		$user = $this->VendorUser_Model->findById($id);

		$groups = $this->UserGroup_Model->getData();
		$vendors = $this->Vendor_Model->vendor();

		$userGroup = $this->ion_auth->get_users_groups($user->id)->result();

		$userGroupArray = [];
		foreach ($userGroup as $group) {
			$userGroupArray[$group->id] = $group->id;
		}


		return view('admin.user.vendor.edit', array(
			'user' => $user,
			'groups' => $groups->result(),
			'vendors' => $vendors->result(),
			'userGroup' => $userGroupArray
		));
    }

	public function updateUserVendor($id)
	{
		$user = $this->VendorUser_Model->findById($id);

		$this->validatorVendor(false);

		if($this->form_validation->run()) {
			$this->VendorUser_Model->updateData($this->input->post(), $user->id);
			$this->session->set_flashdata('success', 'Data Inserted');
			return redirect("admin/user-management/vendor", 'refresh');
		} else {
			return $this->editUserVendor($user->id);
		}
    }
}
