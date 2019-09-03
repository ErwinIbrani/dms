<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserGroup extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserGroup_Model');
    }

    public function index() 
    {
        var_dump($this->UserGroup_Model) or die;
        $this->title = "User Groups";
        return view('admin.user.group.index', [
            'title' => $this->title
        ]);
    }
}