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
           $modelData = $this->CandidateDocument_Model->findOne($this->input->post('document_id'))->row_array();
           $data = [
               'project_id'      => $this->input->post('project_id'),
               'document_id'     => $this->input->post('document_id'),
               'approved_id'     => $this->ion_auth->user()->row()->id,
               'group_id'        => $this->ion_auth->get_users_groups()->row()->id,
               'approved_at'     => date('Y-m-d H:i:s'),
               'attribute'       => $modelData['attribute'],
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
              if(!empty($modelHistory)) {
                   if($template['type'] == 'SITAC TSA') {
                       $approvals = $this->DocumentApprovalHistory_Model->findStatusApproval('SITAC TSA', $this->input->post('document_id'))->result();
                       generateTsa($template, $approvals, $modelHistory);
                   }
                   elseif ($template['type'] == 'FOUNDATION and ERECTION'){
                       $approvals = $this->DocumentApprovalHistory_Model->findStatusApproval('FOUNDATION and ERECTION', $this->input->post('document_id'))->result();
                       generateFoundationErection($template, $approvals, $modelHistory);
                   }
                   elseif ($template['type'] == 'FENCE'){
                       $approvals = $this->DocumentApprovalHistory_Model->findStatusApproval('FENCE', $this->input->post('document_id'))->result();
                       generateFence($template, $approvals, $modelHistory);
                   }
                   elseif ($template['type'] == 'RFI'){
                       $approvals = $this->DocumentApprovalHistory_Model->findStatusApproval('RFI', $this->input->post('document_id'))->result();
                       generateRfi($template, $approvals, $modelHistory);
                   }
                   elseif ($template['type'] == 'PAT'){
                       $approvals = $this->DocumentApprovalHistory_Model->findStatusApproval('PAT', $this->input->post('document_id'))->result();
                       generatePat($template, $approvals, $modelHistory);
                   }
                   elseif ($template['type'] == 'ADD REDUCE'){
                       $approvals = $this->DocumentApprovalHistory_Model->findStatusApproval('ADD REDUCE', $this->input->post('document_id'))->result();
                       generateAddReduce($template, $approvals, $modelHistory);
                   }
                   elseif ($template['type'] == 'ABD'){
                       $approvals = $this->DocumentApprovalHistory_Model->findStatusApproval('ABD', $this->input->post('document_id'))->result();
                       generateAbd($template, $approvals, $modelHistory);
                   }
                   elseif ($template['type'] == 'HAND OVER'){
                       $approvals = $this->DocumentApprovalHistory_Model->findStatusApproval('HAND OVER', $this->input->post('document_id'))->result();
                       generateHandOver($template, $approvals, $modelHistory);
                   }
                   elseif ($template['type'] == 'BAST'){
                       $approvals = $this->DocumentApprovalHistory_Model->findStatusApproval('BAST', $this->input->post('document_id'))->result();
                       generateBast($template, $approvals, $modelHistory);
                   }
               }
               $this->session->set_flashdata('success', 'Document Accepted');
               redirect_back();
           }
       }else{
          $update    = $this->CandidateDocument_Model->update($this->input->post('document_id'), ['status_revision'=> 1]);
          $modelData = $this->CandidateDocument_Model->findOne($this->input->post('document_id'))->row_array();
          if($update == TRUE)
              $data = [
                   'project_id'      => $this->input->post('project_id'),
                   'document_id'     => $this->input->post('document_id'),
                   'approved_id'     => $this->ion_auth->user()->row()->id,
                   'group_id'        => $this->ion_auth->get_users_groups()->row()->id,
                   'approved_at'     => date('Y-m-d H:i:s'),
                   'attribute'       => $modelData['attribute'],
                   'path'            => $modelData['path'],
                   'status_approval' => $this->input->post('status_approval'),
                   'note'            => $this->input->post('note'),
               ];
          $this->DocumentApprovalHistory_Model->save($data);
          $this->session->set_flashdata('success', 'Document Rejected');
          redirect_back();
       }
    }


}