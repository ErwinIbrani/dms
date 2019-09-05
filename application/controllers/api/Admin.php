<?php
require APPPATH . 'libraries/REST_Controller.php';

class Admin extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Region_Model', 'Province_Model','City_Model', 'GroupVendor_Model']);
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

    public function groupvendor_get()
    {
        $data =  $this->GroupVendor_Model->groupvendor()->result();
        $this->response($data, REST_Controller::HTTP_OK);
    }



}