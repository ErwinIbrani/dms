<?php

class Survey extends Project_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['generatepdf', 'custom']);
        $this->lang->load('auth');
		$this->load->model(['Document_Model','Candidate_Model', 'Project_Model', 'CandidateDocument_Model', 'User_Model', 'UserVendor_Model', 'Vendor_Model']);
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
        $allcount             = $this->CandidateDocument_Model->getrecordCountSurvey($search_text);
        $records              = $this->CandidateDocument_Model->getDataSurvey($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'project/survey/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();


        return view('project.survey.index', array(
            'pagination' => $pagination,
            'candidates' => $records,
            'search'     => $search_text,
            'breadcrumb' => $breadcrumb,
        ));
    }


   public function download($file_name)
   {
       if(!empty($file_name)) {
           $this->load->helper('download');
           $file = 'uploads/surveysitac/' . $file_name . '';
           force_download($file, NULL);
       }
       $this->session->set_flashdata('error', 'File Empty');
       redirect("project/survey/index", 'refresh');
   }

    public function choose($id)
    {
        $candidateModel  = $this->CandidateDocument_Model->findOne($id)->row_array();
        $this->CandidateDocument_Model->update($id,  ['status' => 'choose']);
        $candidateChoose = $this->Candidate_Model->update($candidateModel['candidate_id'], ['has_selected' => 1]);
        if($candidateChoose == true){
            $this->session->set_flashdata('success', 'Candidate Selected');
            redirect("vendor/candidate/document/survey/index", 'refresh');
        }
    }

   /*public function choose($id)
   {
       $candidateModel = $this->CandidateDocument_Model->findOne($id)->row_array();
       $candidate = $this->CandidateDocument_Model->update($id,  ['status_revision' => 'Choose']);
       if($candidate == true){
           $data = [
               'project_id'      => $candidateModel['project_id'],
               'vendor_id'       => $candidateModel['vendor_id'],
               'name'            => $candidateModel['name'],
               'code'            => $candidateModel['code'],
               'type'            => $candidateModel['type'],
               'attachment'      => $candidateModel['attachment'],
               'path'            => $candidateModel['path'],
               'attribute'       => $candidateModel['attribute'],
               'created_at'      => $candidateModel['created_at'],
               'status_revision' => $candidateModel['status_revision']
           ];
           $this->Document_Model->save($data);
           $this->session->set_flashdata('success', 'Candidate Selected');
           redirect("vendor/candidate/document/survey/index", 'refresh');
       }
   }*/

    public function testpdf()
    {
        $model = $this->CandidateDocument_Model->findOne(119)->row_array();
        return view('test_template.survey', ['model' => $model]);
    }


}
