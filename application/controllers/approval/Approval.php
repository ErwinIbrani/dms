<?php

class Approval extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['generatepdf', 'custom']);
        $this->lang->load('auth');
        $this->load->model(['Approval_Model']);
        authentication($this->ion_auth->logged_in());
    }
}