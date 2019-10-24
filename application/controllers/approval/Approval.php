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
           $data = [
               'project_id'      => $this->input->post('project_id'),
               'document_id'     => $this->input->post('document_id'),
               'approved_id'     => $this->ion_auth->user()->row()->id,
               'approved_at'     => date('Y-m-d H:i:s'),
               'status_approval' => $this->input->post('status_approval'),
               'note'            => $this->input->post('note'),
           ];
           $cek   = $this->DocumentApprovalHistory_Model->duplicate($this->input->post('document_id'), $this->ion_auth->user()->row()->id);
           if($cek->num_rows() > 0){
               $this->session->set_flashdata('warning', 'You Have Submitted This Document');
               return redirect_back();
           }else {
               $template     = $this->CandidateDocument_Model->findOne($this->input->post('document_id'))->row_array();
               $modelHistory = $this->DocumentApprovalHistory_Model->save($data);
               $approvals    = $this->DocumentApprovalHistory_Model->findStatusApproval('SITAC TSA')->result();
               if(!empty($modelHistory)) {
                 generateTsa($template, $approvals, $modelHistory);
               }
               $this->session->set_flashdata('success', 'Document Accepted');
               redirect_back();
           }
       }else{
         $this->reject();
         $this->session->set_flashdata('success', 'Document Accepted');
         redirect_back();
       }
    }

    protected function reject()
    {
        //buat document baru
        var_dump('Ditolak');
    }
}