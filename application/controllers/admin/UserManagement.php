<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserManagement extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        authentication($this->ion_auth->logged_in());
    }

    public function index()
    {
        return view('admin.user.index');
    }

    public function groups() {
        $this->title = "User Gorups";
        return view('admin.user.group.index', [
            'title' => $this->title
        ]);
    }
}