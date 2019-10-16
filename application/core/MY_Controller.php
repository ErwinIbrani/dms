<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
}

class ProjectAdmin_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->in_group('Project Admin'))
        {
            redirect('login', 'refresh');
        }
    }
}
