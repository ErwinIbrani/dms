<?php


class Tsa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['generatepdf', 'custom']);
        $this->lang->load('auth');
        $this->load->model(['Candidate_Model','Tsa_Model','CandidateDocument_Model','Project_Model', 'User_Model', 'UserVendor_Model', 'Vendor_Model']);
        authentication($this->ion_auth->logged_in());
    }

    public function index()
    {

    }

    public function create($candidate_id)
    {
        $candidate           = $this->Candidate_Model->getCandidateById($candidate_id)->row();
        $candidate_document  = $this->CandidateDocument_Model->findCandidateSurveyDone($candidate->id)->row_array();
        $bap                 = $this->CandidateDocument_Model->findCandidateBapDone($candidate->id)->row_array();
        $project             = $this->Project_Model->findOne($candidate_document['project_id'])->row_array();
        $vendor              = $this->Vendor_Model->findOne($candidate_document['vendor_id'])->row_array();
        $vendorUser          = $this->UserVendor_Model->getPIC($vendor['id'])->row_array();
        $content_bap         = json_decode($bap['attribute'], true);
        $content             = json_decode($candidate_document['attribute'], true);
        return view('project.tsa.create', array(
           'candidate_document'  => $candidate_document,
           'candidate'           => $candidate,
           'content'             => $content,
           'project'             => $project,
           'vendor'              => $vendor,
           'bap'                 => $bap,
           'content_bap'         => $content_bap,
           'vendorUser'          => $vendorUser
         ));
    }



}