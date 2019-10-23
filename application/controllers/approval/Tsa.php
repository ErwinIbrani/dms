<?php

class Tsa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['generatepdf', 'custom']);
        $this->lang->load('auth');
        $this->load->model(['Approval_Model','CandidateDocument_Model', 'Project_Model', 'DocumentSetting_Model', 'DocumentApprovalHistory_Model', 'DocumentApprovalSetting_Model']);
        authentication($this->ion_auth->logged_in());
    }

    public function index($rowno=0)
    {
        $this->make_bread->add('Index');
        $breadcrumb = $this->make_bread->output();
        $search_text = "";
        if($this->input->post('submit') != NULL ){
            $search_text = $this->input->post('search');
            $this->session->set_userdata(["search" => $search_text]);
        }else{
            if($this->session->userdata('search') != NULL){
                $search_text = $this->session->userdata('search');
            }
        }

        $rowperpage = 20;
        if($rowno  != 0){
            $rowno  = ($rowno-1) * $rowperpage;
        }
        $allcount             = $this->Approval_Model->getrecordCountTSA($this->ion_auth->get_users_groups()->row()->id, $this->ion_auth->user()->row()->id);
        $records              = $this->Approval_Model->getApproverTSA($rowno, $rowperpage, $this->ion_auth->get_users_groups()->row()->id, $this->ion_auth->user()->row()->id);

        $config['base_url']   = base_url().'approval/tsa/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('approval.tsa.index', array(
            'pagination' => $pagination,
            'candidates' => $records,
            'search'     => $search_text,
            'breadcrumb' => $breadcrumb,
        ));
    }

    public function view($document_id)
    {
        $status             = $this->DocumentApprovalHistory_Model->getLastApprove($document_id)->row();
        $document_candidate = $this->CandidateDocument_Model->findOne($document_id)->row();
        $attribute          = json_decode($document_candidate->attribute);
        $project            = $this->Project_Model->findOne($document_candidate->project_id)->row();
        $docuemntStatus     = $this->DocumentApprovalSetting_Model->findApprovalTSA($document_candidate->project_id, $this->ion_auth->user()->row()->id)->row();

        return view('approval/tsa/view', array(
            'candidate'      => $attribute,
            'document'       => $document_candidate,
            'project'        => $project,
            'status'         => $status,
            'docuemntStatus' => $docuemntStatus

        ));
    }





}