<?php
require APPPATH . 'libraries/REST_Controller.php';

class Admin extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Region_Model', 'Province_Model','City_Model', 'UserVendor_Model', 'Vendor_Model', 'Project_Model']);
    }

    public function region_get()
    {
        $data =  $this->Region_Model->region()->result();
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function province_get()
    {
        $data =  $this->Province_Model->province()->result();
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function city_get()
    {
        $data =  $this->City_Model->city()->result();
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function vendor_get()
    {
        $data =  $this->Vendor_Model->vendor()->result();
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function uservendor_get()
    {
        $data =  $this->UserVendor_Model->uservendor()->result();
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function project_get()
    {
        $data =  $this->Project_Model->project()->result();
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function project_post() {
        $this->response($this->post(), REST_Controller::HTTP_OK);
    }

}
