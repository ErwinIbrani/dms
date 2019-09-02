<?php

class Groupvendor extends CI_Controller
{

    public function __Construct()
    {
        parent ::__construct();
        $this->load->model('GroupVendor_Model');
    }

   public function index()
   {
       $this->data['groups'] = $this->GroupVendor_Model->find()
                               ->select('*')
                               ->where('status', '1')
                               ->order_by('id')
                               ->get()
                               ->result_array();
       $this->load->view('admin/group-vendor/index', $this->data);
   }

}