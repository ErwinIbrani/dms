<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_server extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model(['TestConnection_Model']);
    }	

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('rest_server');
    }

    public function test()
    {
        $data = $this->TestConnection_Model->get_legal()->result();

        var_dump($data);
        }
    
}
