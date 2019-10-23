<?php

class Approval extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['generatepdf', 'custom']);
        $this->lang->load('auth');
        $this->load->model(['Approval_Model', 'CandidateDocument_Model', 'DocumentApprovalHistory_Model']);
        authentication($this->ion_auth->logged_in());
    }

    public function store()
    {
       if($this->input->post('status_approval') == 'Accept')
       {
        $this->accept();
        $this->session->set_flashdata('success', 'Document Accepted');
        redirect_back();
       }else{
         $this->reject();
         $this->session->set_flashdata('success', 'Document Accepted');
         redirect_back();
       }
    }

    protected function accept()
    {
        $data = [
                  'project_id'      => $this->input->post('project_id'),
                  'document_id'     => $this->input->post('document_id'),
                  'approved_id'     => $this->ion_auth->user()->row()->id,
                  'approved_at'     => date('Y-m-d H:i:s'),
                  'status_approval' => $this->input->post('status_approval'),
                  'note'            => $this->input->post('note'),
                ];
        $template  = $this->CandidateDocument_Model->findOne($this->input->post('document_id'))->row_array();
        $approvals = $this->DocumentApprovalHistory_Model->findStatusApproval('SITAC TSA')->result();
        $modelHistory = $this->DocumentApprovalHistory_Model->save($data);
        return generateTsa($template, $approvals, $modelHistory);
    }

    protected function reject()
    {
        //buat document baru
        var_dump('Ditolak');
    }
}