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
			"username"=>array("header"=>"Username", "type"=>"link", 'href' => site_url('admin/userManagement/editUserInternal/{id}')),
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

	public function createUserInternal()
	{

		$groups = $this->UserGroup_Model->getData();

		return view('admin.user.internal.create', array(
			'groups' => $groups->result()
		));
    }

	protected function validatorInternal($isNew) {
		if($isNew) {
			$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]',
				array('is_unique' => 'This %s already exists.'));
			$this->form_validation->set_rules('password', 'Password', 'required');
		} else {
			$this->form_validation->set_rules('email', 'Email', 'required');
		}

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('role[]', 'role', 'required');
	}

	public function storeUserInternal()
	{
		$this->validatorInternal(true);

		if($this->form_validation->run()) {
			$this->InternalUser_Model->storeData($this->input->post());
			$this->session->set_flashdata('success', 'Data Inserted');
			return redirect("admin/userManagement/", 'refresh');
		} else {
			return $this->createUserVendor();
		}

	}

	public function editUserInternal($id)
	{
		$user = $this->InternalUser_Model->findById($id);

		$groups = $this->UserGroup_Model->getData();

		$userGroup = $this->ion_auth->get_users_groups($user->id)->result();

		$userGroupArray = [];
		foreach ($userGroup as $group) {
			$userGroupArray[$group->id] = $group->id;
		}


		return view('admin.user.internal.edit', array(
			'user' => $user,
			'groups' => $groups->result(),
			'userGroup' => $userGroupArray
		));
	}

	public function updateUserInternal($id)
	{
		$user = $this->InternalUser_Model->findById($id);

		$this->validatorInternal(false);

		if($this->form_validation->run()) {
			$this->InternalUser_Model->updateData($this->input->post(), $user->id);
			$this->session->set_flashdata('success', 'Data Updated');
			return redirect("admin/userManagement/", 'refresh');
		} else {
			return $this->editUserInternal($user->id);
		}
	}

	public function deleteUserInternal($id)
	{
		$this->InternalUser_Model->deleteData($id);
		$this->session->set_flashdata('success', 'Data Deleted');
		return redirect("admin/userManagement", 'refresh');
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
			"username"=>array("header"=>"Username", "type"=>"link", 'href' => site_url('admin/userManagement/editUserVendor/{id}')),
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

	public function deleteUserVendor($id)
	{
		$this->VendorUser_Model->deleteData($id);
		$this->session->set_flashdata('success', 'Data Deleted');
		return redirect("admin/user-management/vendor", 'refresh');
    }
}
