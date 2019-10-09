<?php


class Tsa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['generatepdf', 'custom']);
        $this->lang->load('auth');
        $this->load->model(['Document_Model','Tsa_Model','CandidateDocument_Model','Project_Model', 'User_Model', 'UserVendor_Model', 'Vendor_Model']);
        authentication($this->ion_auth->logged_in());
    }

    public function index()
    {

    }

    public function create($project_id)
    {
        $project   = $this->Document_Model->findCandidateSurveyDone($project_id)->row_array();
        return view('project.tsa.create', array(
           'project'    => $project,
        ));
    }



}