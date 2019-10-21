<?php

class Tsa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['generatepdf', 'custom']);
        $this->lang->load('auth');
        $this->load->model(['DocumentApproval_Model', 'Candidate_Model','Tsa_Model','CandidateDocument_Model','Project_Model', 'User_Model', 'UserVendor_Model', 'Vendor_Model']);
        authentication($this->ion_auth->logged_in());
    }

    public function candidate($rowno=0)
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
        $allcount             = $this->CandidateDocument_Model->getrecordCountCandidateDone($search_text);
        $records              = $this->CandidateDocument_Model->getDataCandidateDone($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'project/tsa/candidate';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('project.tsa.index-candidate-done', array(
            'pagination' => $pagination,
            'candidates' => $records,
            'search'     => $search_text,
            'breadcrumb' => $breadcrumb,
        ));
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
        $allcount             = $this->CandidateDocument_Model->getrecordCountTSA($search_text);
        $records              = $this->CandidateDocument_Model->getDataTSA($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'project/tsa/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('project.tsa.index', array(
            'pagination' => $pagination,
            'candidates' => $records,
            'search'     => $search_text,
            'breadcrumb' => $breadcrumb,
        ));
    }

    public function create($candidate_id)
    {
        $candidate           = $this->Candidate_Model->getCandidateById($candidate_id)->row();
        $candidate_document  = $this->CandidateDocument_Model->findCandidateSurveyDone($candidate->id)->row_array();
        $bap                 = $this->CandidateDocument_Model->findCandidateBapDone($candidate->id)->row_array();
        $project             = $this->Project_Model->findOne($candidate_document['project_id'])->row_array();
        $picProject          = $this->User_Model->findOne($project['pic_project_id'])->row_array();
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
           'vendorUser'          => $vendorUser,
           'picProject'          => $picProject,
         ));
    }

    protected $attribute = [];

    public function store()
    {
        $this->attribute = [
            'project_name'  => $this->input->post('project_name'),
            'operator'      => $this->input->post('operator'),
            'tsa_number'    => $this->input->post('tsa_number'),
            'site_id_ibs'   => $this->input->post('site_id_ibs'),
            'site_name'     => $this->input->post('site_name'),
            'long'          => $this->input->post('long'),
            'lat'           => $this->input->post('lat'),
            'region'        => $this->input->post('region'),
            'site_type'     => $this->input->post('site_type'),
            'tower_type'    => $this->input->post('tower_type'),
            'tower_height'  => $this->input->post('tower_height'),
            'initil_price_peryear'  => $this->input->post('initil_price_peryear'),
            'land_size'             => $this->input->post('land_size'),
            'access_road'           => $this->input->post('access_road'),
            'status_site'           => $this->input->post('status_site'),
            'land_status'           => $this->input->post('land_status'),
            'owner_name'            => $this->input->post('owner_name'),
            'phone_number'          => $this->input->post('phone_number'),
            'topology'              => $this->input->post('topology'),
            'contact_persons'       => $this->input->post('contact_persons'),
            'address'               => $this->input->post('address'),
            'time_access'           => $this->input->post('time_access'),
            'acquition_status'      => $this->input->post('acquition_status'),
            'final_per_year'        => $this->input->post('final_per_year'),
            'total_price'           => $this->input->post('total_price'),
            'vendor_pic'            => $this->input->post('vendor_pic'),
            'vendor_phone'          => $this->input->post('vendor_phone'),
            'start_year'            => $this->input->post('start_year'),
            'end_year'              => $this->input->post('end_year'),
            'purchased_option'      => $this->input->post('purchased_option'),
            'ibs_pic'               => $this->input->post('ibs_pic'),
            'location_site'         => $this->input->post('location_site'),
            'note'                  => $this->input->post('note'),
        ];
          $this->attribute['other_condition']     =  $this->input->post('other_condition[]');
          $this->attribute['phase']               = $this->input->post('phase[]');
          $this->attribute['percen']              = $this->input->post('percen[]');
          $this->attribute['amount']              = $this->input->post('amount[]');
          $this->attribute['description']         = $this->input->post('description[]');
          $this->attribute['jarak_dari_kandidat'] = $this->input->post('jarak_dari_kandidat[]');
          $this->attribute['tower_existing']      = $this->input->post('tower_existing[]');
          $this->attribute['potensi_market']      = $this->input->post('potensi_market[]');
          $this->attribute['kandidates']          = $this->input->post('kandidates[]');
          $this->attribute['e_longiude']          = $this->input->post('e_longiude[]');
          $this->attribute['ns_latitude']         = $this->input->post('ns_latitude[]');
          $this->attribute['masa_sewa']           = $this->input->post('masa_sewa[]');
          $this->attribute['harga_sewa']          = $this->input->post('harga_sewa[]');
          $this->attribute['cancelation_remarks'] = $this->input->post('cancelation_remarks[]');
          $this->attribute['contact_person']      = $this->input->post('contact_person[]');

        $data = [
            'project_id'    => $this->input->post('project_id'),
            'vendor_id'     => $this->input->post('vendor_id'),
            'name'          => 'TSA',
            'code'          => 'FM-SPA-005',
            'type'          => 'SITAC',
            'candidate_id'  => $this->input->post('candidate_id'),
            'status'        => 'submited',
            'created_at'    => date('Y-m-d H:i:s'),
            'attribute'     => json_encode($this->attribute),
        ];
        $data  =  $this->CandidateDocument_Model->save($data);
        if(!empty($data)) {
              $this->DocumentApproval_Model->save([
                                                   'project_id'     => $this->input->post('project_id'),
                                                   'document_id'    => $data,
                                                   'approved_id'    => $this->ion_auth->user()->row()->id,
                                                   'approved_at'    => date("Y-m-d H:i:s"),
                                                   'status_approval'=> 'submit']);
              $template = $this->CandidateDocument_Model->findOne($data)->row_array();
              generateTsa($template);
              $this->session->set_flashdata('success', 'Data Uploded');
              redirect("/project/project/detail/".$data['project_id'], 'refresh');
          }
    }

    public function view($document_id)
    {
        $document_candidate = $this->CandidateDocument_Model->findOne($document_id)->row();
        $attribute = json_decode($document_candidate->attribute);
        $project = $this->Project_Model->findOne($document_candidate->project_id)->row();

        return view('project/tsa/preview', array(
            'candidate' => $attribute,
            'document'  => $document_candidate,
            'project'   => $project
        ));
    }

    public function download($file_name)
    {
        if(!empty($file_name)) {
            $this->load->helper('download');
            $file = 'uploads/tsa/' . $file_name . '';
            force_download($file, NULL);
        }
        $this->session->set_flashdata('error', 'File Empty');
        redirect("project/tsa/index", 'refresh');
    }

    public function testpdf()
    {
        $model = $this->CandidateDocument_Model->findOne(2260)->row_array();
        return view('test_template.tsa', ['model' => $model]);
    }



}
