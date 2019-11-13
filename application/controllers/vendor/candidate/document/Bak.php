<?php

class Bak extends CI_Controller {

	const UPLOAD_PATH = 'uploads/bak/';

    public $attribute = [];

    public function __construct() {
        parent::__construct();
        $this->load->model(array('Candidate_Model', 'Project_Model', 'CandidateDocument_Model'));
        authentication($this->ion_auth->logged_in());
    }

    public function add($candidate_id) {
        $candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
        $project = $this->Project_Model->findOne($candidate->project_id)->row();

        return view('vendor.candidate.document.bak.add', array(
            'candidate' => $candidate,
            'project' => $project
        ));
    }

    public function store($candidate_id) {
        $candidate = $this->Candidate_Model->getCandidateById($candidate_id)->result_array();

        $this->attribute['candidate'] = $candidate;
        $this->attribute['bak'] = $this->input->post();


        $candidate_document = array(
            'candidate_id' => $candidate_id,
            'project_id' => $candidate[0]['project_id'],
            'vendor_id' => $candidate[0]['vendor_id'],
            'name' => 'BAK',
            'code' => 'FM-SPA-006',
            'type' => 'SITAC',
            'attribute' => json_encode($this->attribute),
            'status' => 'submitted',
            'created_at' => date('Y-m-d H:i:s')
        );


        $document_id = $this->CandidateDocument_Model->save($candidate_document);
        $api_endpoint = "https://selectpdf.com/api2/convert/";

        $layout_url = site_url('/public/layout/bak/' . $document_id);
        $parameters = array('key' => $this->config->item('pdf_key'), 'url' => $layout_url,
            'web_page_width' => '816',
            'page_numbers' => 'False');
        $result = @file_get_contents("$api_endpoint?" . http_build_query($parameters));
        if (!$result) {
            echo "HTTP Response: " . $http_response_header[0] . "<br/>";

            $error = error_get_last();
            echo "Error Message: " . $error['message'];
        } else {
            // set HTTP response headers
            $filename = 'BAK-' . time() . '.pdf';
            $local_file = './uploads/bak/' . $filename;
            file_put_contents($local_file, $result);
            $this->CandidateDocument_Model->update($document_id, array('path' => $filename));
            return redirect('/vendor/candidate/document/bak/preview/' . $document_id);
        }
    }

    public function preview($document_id) {
        $document_candidate = $this->CandidateDocument_Model->findOne($document_id)->row();
        $attribute = json_decode($document_candidate->attribute);

        $candidate = $attribute->candidate[0];
        $project = $this->Project_Model->findOne($candidate->project_id)->row();
        $candidate_bak = $attribute->bak;
        $path_document = '/uploads/bak/' . $document_candidate->path;
        return view('vendor.candidate.document.preview', array(
            'candidate' => $attribute->candidate[0],
            'document' => $document_candidate,
            'path_document' => $path_document
        ));
    }

	public function uploadbak($document_id)
	{
		$config = [];
		$config['upload_path'] = self::UPLOAD_PATH;
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
		$config['max_size'] = '2000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		$candidate = $this->CandidateDocument_Model->findOne($document_id)->row();

		if (!$this->upload->do_upload('upload_bak')) {
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error', $error['error']);
			redirect("/vendor/candidate/detail/index/" . $candidate->candidate_id, 'refresh');
		} else {

			$data = $this->upload->data();
			$file_name = $data['raw_name'] . $data['file_ext'];
			$this->CandidateDocument_Model->update($document_id, array('attachment' => $file_name));
			$this->Project_Model->update($candidate_document['project_id'], array('work_status' => 'IW'));

			$this->session->set_flashdata('success', 'Success upload document');
			redirect("/vendor/candidate/detail/index/" . $candidate->candidate_id, 'refresh');
		}
    }

}
