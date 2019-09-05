<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserManagement extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('InternalUser_Model');
        authentication($this->ion_auth->logged_in());
    }

    public function index($page = 0)
    {
    	$this->title = 'User';

    	$sql = "users";
		// Column settings
		$columns = array("id"=>array("header"=>"User ID", "type"=>"label"),
			"username"=>array("header"=>"Username", "type"=>"label"),
			"email"=>array("header"=>"Email", "type"=>"label")
		);

		// Set the grid 
		$this->smartgrid->set_grid($sql, $columns, ['page_size' => 1]);

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
		$this->title = 'Add New User';
		return view('admin.user.internal.create', array(
			'title' => $this->title
		));
		
//		$username = 'benedmunds';
//		$password = '12345678';
//		$email = 'ben.edmunds@gmail.com';
//		$additional_data = array(
//			'first_name' => 'Ben',
//			'last_name' => 'Edmunds',
//		);
//		$group = array('1'); // Sets user to admin.
//
//		$this->ion_auth->register($username, $password, $email, $additional_data, $group);
    }

	public function storeData()
	{
		
    }
}
