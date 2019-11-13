<?php

use PhpOffice\PhpWord\TemplateProcessor;

class Bap extends CI_Controller {

    protected $attribute = array();

    public function __construct() {
        parent::__construct();
        $this->load->model(array('Candidate_Model', 'Project_Model', 'CandidateDocument_Model', 'Document_Model', 'InternalUser_Model'));
        authentication($this->ion_auth->logged_in());
    }

    public function add($candidate_id) {
        $candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
        $project = $this->Project_Model->findOne($candidate->project_id)->row();
        $pic = $this->InternalUser_Model->findById($project->pic_project_id);

        //var_dump($project) or die;
        return view('vendor.candidate.document.bap.add_bap', array(
            'candidate' => $candidate,
            'project' => $project,
            'pic_ibs' => $pic
        ));
    }

    public function store($candidate_id) {
        $candidate = $this->Candidate_Model->getCandidateById($candidate_id)->result_array();

        $this->attribute['candidate'] = $candidate;
        $this->attribute['bap'] = $this->input->post();


        $candidate_document = array(
            'candidate_id' => $candidate_id,
            'project_id' => $candidate[0]['project_id'],
            'vendor_id' => $candidate[0]['vendor_id'],
            'name' => 'BAP',
            'code' => 'FM-SPA-006',
            'type' => 'SITAC',
            'attribute' => json_encode($this->attribute),
            'status' => 'submitted',
            'created_at' => date('Y-m-d H:i:s')
        );

        $document_id = $this->CandidateDocument_Model->save($candidate_document);
        $hasKomSitac = $this->Document_Model->getSpecificDocument($candidate_document['project_id'], 'COM SITAC')->row();
        $hasSurveyDoc = $this->CandidateDocument_Model->getSpecificDocument($candidate_document['project_id'], 'SURVEY')->row();

        if (!is_null($hasSurveyDoc) && !is_null($hasKomSitac)) {
            $this->Project_Model->update($candidate_document['project_id'], array('work_status' => 'TSA'));
        }

        $api_endpoint = "https://selectpdf.com/api2/convert/";
        $test_url = site_url('/public/layout/bap/' . $document_id);

        $parameters = array('key' => $this->config->item('pdf_key'), 'url' => $test_url, 'web_page_width' => '816', 'page_numbers' => 'False');

        $result = @file_get_contents("$api_endpoint?" . http_build_query($parameters));
        if (!$result) {
            echo "HTTP Response: " . $http_response_header[0] . "<br/>";
            $error = error_get_last();
            echo "Error Message: " . $error['message'];
        } else {
            $filename = 'BAP-' . time() . '.pdf';
            $local_file = './uploads/bap/' . $filename;
            file_put_contents($local_file, $result);
            $this->CandidateDocument_Model->update($document_id, array('path' => $filename));
            return redirect('/vendor/candidate/document/bap/preview/' . $document_id);
        }
    }

    public function preview($document_id) {
        $document_candidate = $this->CandidateDocument_Model->findOne($document_id)->row();
        $attribute = json_decode($document_candidate->attribute);

        $candidate = $attribute->candidate[0];
        $project = $this->Project_Model->findOne($candidate->project_id)->row();
        $candidate_bap = $attribute->bap;
        $path_document = '/uploads/bap/' . $document_candidate->path;
        return view('vendor.candidate.document.preview', array(
            'candidate' => $attribute->candidate[0],
            'document' => $document_candidate,
            'path_document' => $path_document
        ));
    }

}
