<?php

class Document extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['generatepdf', 'custom']);
        $this->lang->load('auth');
        $this->load->model(['Approval_Model','CandidateDocument_Model', 'Project_Model', 'DocumentSetting_Model', 'DocumentApprovalHistory_Model']);
        authentication($this->ion_auth->logged_in());
    }

    public function index($rowno=0)
    {
        $this->make_bread->add('Index');
        $breadcrumb = $this->make_bread->output();

        $rowperpage = 20;
        if($rowno  != 0){
            $rowno  = ($rowno-1) * $rowperpage;
        }
        $allcount             = $this->Approval_Model->getDocumentCount($this->ion_auth->get_users_groups()->row()->id, $this->ion_auth->user()->row()->id);
        $records              = $this->Approval_Model->getDocument($rowno, $rowperpage, $this->ion_auth->get_users_groups()->row()->id, $this->ion_auth->user()->row()->id);

        $config['base_url']   = base_url().'approval/document/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('approval.document.index', array(
            'pagination' => $pagination,
            'candidates' => $records,
            'breadcrumb' => $breadcrumb,
        ));
    }

    public function view($document_id)
    {
        $statusLastApprove  = $this->DocumentApprovalHistory_Model->getLastApprove($document_id)->row();
        $document_candidate = $this->CandidateDocument_Model->findOne($document_id)->row();
        $attribute          = json_decode($document_candidate->attribute);
        $project            = $this->Project_Model->findOne($document_candidate->project_id)->row();
        $docuemntStatus     = $this->Approval_Model->findApproval($document_id, $this->ion_auth->user()->row()->id, $this->ion_auth->get_users_groups()->row()->id)->row();

        return view('approval.document.view', array(
            'candidate'      => $attribute,
            'document'       => $document_candidate,
            'project'        => $project,
            'status'         => $statusLastApprove,
            'docuemntStatus' => $docuemntStatus
        ));
    }



}