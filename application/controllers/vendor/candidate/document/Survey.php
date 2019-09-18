<?php

class Survey extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('generatepdf');
		$this->load->model(['Candidate_Model', 'Project_Model', 'CandidateDocument_Model']);
	}

	public function index($candidate_id)
	{
		$candidate = $this->Candidate_Model->getCandidateById($candidate_id)->row();
		$project   = $this->Project_Model->findOne($candidate->project_id)->row();
		return view('vendor.candidate.document.survey', array(
			'candidate' => $candidate,
            'project'   => $project
		));
	}

	public function store()
    {
       /* $this->form_validation->set_rules('code', 'Code', 'trim|required');
        $this->form_validation->set_rules('type', 'Type', 'trim|required');
        $this->form_validation->set_rules('contractor', 'Contractor', 'trim|required');
        $this->form_validation->set_rules('project_manger', 'Project Manger', 'trim|required');
        $this->form_validation->set_rules('distance_from_nom', 'Distance From Nom', 'trim|required');
        $this->form_validation->set_rules('azimuth', 'Azimuth', 'trim|required');
        $this->form_validation->set_rules('site_address', 'Site Address', 'trim|required');
        $this->form_validation->set_rules('site_location', 'Site Location', 'trim|required');
        $this->form_validation->set_rules('tower_type', 'Tower Type', 'trim|required');
        $this->form_validation->set_rules('building_height', 'Building Height', 'trim|required');
        $this->form_validation->set_rules('floor_no', 'Floor No', 'trim|required');
        $this->form_validation->set_rules('tower_height', 'Tower Height', 'trim|required');
        $this->form_validation->set_rules('space_dimension', 'Space Dimension', 'trim|required');
        $this->form_validation->set_rules('access_road', 'Access Road', 'trim|required');
        $this->form_validation->set_rules('access', 'Access', 'trim|required');
        $this->form_validation->set_rules('owner', 'Owner', 'trim|required');
        $this->form_validation->set_rules('address_owner', 'Address Owner', 'trim|required');
        $this->form_validation->set_rules('pic_owner', 'PIC Owner', 'trim|required');
        $this->form_validation->set_rules('phone_owner', 'Phone Number Owner', 'trim|required');*/

     /*   if (empty($_FILES['path']['site_location_map'])) {
            $this->form_validation->set_rules('site_location_map', 'Site Location Map', 'required');
        }
        if (empty($_FILES['path']['site_layout'])) {
            $this->form_validation->set_rules('site_layout', 'Site Layout', 'required');
        }
        if (empty($_FILES['path']['site_contour'])) {
            $this->form_validation->set_rules('site_contour', 'Site Contour', 'required');
        }*/
        if ($this->form_validation->run() == TRUE) {
            $candidate = $this->Candidate_Model->getCandidateById($this->input->post('candidate_id'))->row();
            $project   = $this->Project_Model->findOne($candidate->project_id)->row();
            return view('vendor.candidate.document.survey', array(
                'candidate' => $candidate,
                'project'   => $project
            ));
        }else {
            $getData  = $this->Project_Model->findOne($this->input->post('project_id'))->row_array();

            $config = [];
            $config['upload_path']   = './uploads/attachment/survey/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['max_size']      = '2000';
            //$config['encrypt_name']  = TRUE;
            //$config['file_name'] = $new_name;

            $this->load->library('upload', $config);

            $site_location_map = '';
            if (!$this->upload->do_upload('site_location_map')) {
                $error = ['error' => $this->upload->display_errors()];
                $this->session->set_flashdata('error', $error['error']);
                redirect("vendor/candidate/document/survey/index/" . $this->input->post('candidate_id'), 'refresh');
            }else{
                $site_location_map = $this->upload->data();
            }
            $site_layout ='';
            if (!$this->upload->do_upload('site_layout')) {
                $error = ['error' => $this->upload->display_errors()];
                $this->session->set_flashdata('error', $error['error']);
                redirect("vendor/candidate/document/survey/index/" . $this->input->post('candidate_id'), 'refresh');
            }else{
                $site_layout  = $this->upload->data();
            }
            $site_contour = '';
            if (!$this->upload->do_upload('site_contour')) {
                $error = ['error' => $this->upload->display_errors()];
                $this->session->set_flashdata('error', $error['error']);
                redirect("vendor/candidate/document/survey/index/" . $this->input->post('candidate_id'), 'refresh');
            }else{
                $site_contour = $this->upload->data();
            }
            if(!empty($site_location_map) && !empty($site_layout) && !empty($site_contour)) {
                $attribute =  [
                    'contractor'        => $this->input->post('contractor'),
                    'project_manger'    => $this->input->post('project_manger'),
                    'sitac_ho'          => $this->input->post('sitac_ho'),
                    'rf'                => $this->input->post('rf'),
                    'tx'                => $this->input->post('tx'),
                    'site_id'           => $this->input->post('site_id'),
                    'site_name'         => $this->input->post('site_name'),
                    'nominal_long'      => $this->input->post('nominal_long'),
                    'nominal_lat'       => $this->input->post('nominal_lat'),
                    'search_radius'     => $this->input->post('search_radius'),
                    'antena_height'     => $this->input->post('antena_height'),
                    'candidate'         => $this->input->post('candidate'),
                    'candidate_long'    => $this->input->post('candidate_long'),
                    'candidate_lat'     => $this->input->post('candidate_lat'),
                    'distance_from_nom' => $this->input->post('distance_from_nom'),
                    'azimuth'           => $this->input->post('azimuth'),
                    'site_address'      => $this->input->post('site_address'),
                    'site_location'     => $this->input->post('site_location'),
                    'tower_type'        => $this->input->post('tower_type'),
                    'building_height'   => $this->input->post('building_height'),
                    'floor_no'          => $this->input->post('floor_no'),
                    'tower_height'      => $this->input->post('tower_height'),
                    'space_dimension'   => $this->input->post('space_dimension'),
                    'access_road'       => $this->input->post('access_road'),
                    'access'            => $this->input->post('access'),
                    'owner'             => $this->input->post('owner'),
                    'address_owner'     => $this->input->post('address_owner'),
                    'pic_owner'         => $this->input->post('pic_owner'),
                    'phone_owner'       => $this->input->post('phone_owner'),
                ];
                $attachment = [
                    'site_location_map' => $site_location_map['file_name'],
                    'site_layout'       => $site_layout['file_name'],
                    'site_contour'      => $site_contour['file_name'],
                ];
                $data = [
                    'project_id'    => $this->input->post('project_id'),
                    'vendor_id'     => $getData['vendor_id'],
                    'candidate_id'  => $this->input->post('candidate_id'),
                    'name'          => $this->input->post('name'),
                    'code'          => $this->input->post('code'),
                    'type'          => $this->input->post('type'),
                    'status'        => 'waiting',
                    'created_at'    => date('Y-m-d H:i:s'),
                    'attribute'     => json_encode($attribute), //nanti didecode
                    'attachment'    => json_encode($attachment)
                ];

                $data     =  $this->CandidateDocument_Model->save($data);
                if(!empty($data)) {
                    $template = $this->CandidateDocument_Model->findOne($data)->row_array();
                    $test = generateSurvey($template);
                    $this->session->set_flashdata('success', 'Data Uploded');
                    redirect("project/project/document/" . $this->input->post('project_id'), 'refresh');
                }
             }else{
                $error = ['error' => $this->upload->display_errors()];
                $this->session->set_flashdata('error', $error['error']);
                redirect("vendor/candidate/document/survey/index/" . $this->input->post('candidate_id'), 'refresh');
            }
          }
      }


}
