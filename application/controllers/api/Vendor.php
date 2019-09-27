<?php
require APPPATH . 'libraries/REST_Controller.php';

class Vendor extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Region_Model', 'Province_Model','City_Model', 'UserVendor_Model', 'Vendor_Model', 'Project_Model']);
    }

    public function survey_get()
    {

    }

    public function survey_post()
    {
        $message = [
            'id' => 100,
            'name' => $this->post('name'),
            'email' => $this->post('email'),
            'message' => 'Added a resource'
        ];

        $this->set_response($message, 201);
    }

}