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

    public function store()
    {

        $other_condition = $this->input->post('other_condition[]');

        for ($i=0;$i<1;$i++){
            
        }

        $jml_siswa = count($id_siswa);
        for ($i=0;$i<$jml_siswa;$i++){ $data = array('id_siswa' => $id_siswa[$i], 'kelas' => $kelas[$i] );
            $this->db->insert('kelas_siswa',$data);
        }

        $attribute = [
            'contractor' => $this->input->post('contractor'),
            'project_manger' => $this->input->post('project_manger'),
            'sitac_ho' => $this->input->post('sitac_ho'),
            'rf' => $this->input->post('rf'),
            'tx' => $this->input->post('tx'),
            'site_id' => $this->input->post('site_id'),
            'site_name' => $this->input->post('site_name'),
            'nominal_long' => $this->input->post('nominal_long'),
            'nominal_lat' => $this->input->post('nominal_lat'),
            'region' => $this->input->post('region'),
            'site_type' => $this->input->post('site_type'),
            'search_radius' => $this->input->post('search_radius'),
            'antena_height' => $this->input->post('antena_height'),
            'candidate' => $this->input->post('candidate'),
            'candidate_long' => $this->input->post('candidate_long'),
            'candidate_lat' => $this->input->post('candidate_lat'),
            'distance_from_nom' => $this->input->post('distance_from_nom'),
            'azimuth' => $this->input->post('azimuth'),
            'site_address' => $this->input->post('site_address'),
            'city' => $this->input->post('city'),
            'site_location' => $this->input->post('site_location'),
            'tower_type' => $this->input->post('tower_type'),
            'building_height' => $this->input->post('building_height'),
            'floor_no' => $this->input->post('floor_no'),
            'tower_height' => $this->input->post('tower_height'),
            'space_dimension' => $this->input->post('space_dimension'),
            'access_road' => $this->input->post('access_road'),
            'access' => $this->input->post('access'),
            'owner' => $this->input->post('owner'),
            'address_owner' => $this->input->post('address_owner'),
            'pic_owner' => $this->input->post('pic_owner'),
            'phone_owner' => $this->input->post('phone_owner'),
        ];

        $data = [
            'project_id'    => $this->input->post('project_id'),
            'vendor_id'     => $this->input->post('vendor_id'),
            'name'          => 'TSA',
            'code'          => 'FM-SPA-005',
            'type'          => 'SITAC',
            'candidate_id'  => $this->input->post('candidate_id'),
            'status'        => 'submited',
            'created_at'    => date('Y-m-d H:i:s'),
            'attribute'     => json_encode($attribute),
        ];
        $data  =  $this->CandidateDocument_Model->save($data);
        if(!empty($data)) {
              $template = $this->CandidateDocument_Model->findOne($data)->row_array();
              generateTsa($template);
              $this->session->set_flashdata('success', 'Data Uploded');
              redirect("project/tsa/index/", 'refresh');
          }
    }



}