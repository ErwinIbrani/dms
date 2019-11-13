<?php
require APPPATH . 'libraries/REST_Controller.php';

class Demo extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['generatepdf', 'custom']);
        $this->load->model(['ApiSession_Model', 'Region_Model', 'Province_Model','City_Model', 'Document_Model', 'UserVendor_Model',
            'UserVendor_Model', 'Vendor_Model', 'Project_Model', 'Candidate_Model', 'CandidateDocument_Model', 'User_Model']);
        $this->load->library(['ion_auth', 'form_validation']);
    }

    // API AUTENTIKASI
    public function autentikasi_post(){
        try {
            $remember = FALSE;
            if ($this->ion_auth->login($this->post('email'), $this->post('password'), $remember)) {
                $session_id = $this->singleton_session_id($this->post('email'));
                $user = $this->User_Model->findByEmail($this->post('email'));
                //throw new Exception($user->vendor);
                $vendor = array();
                $user_vendor = array();
                if(!empty($user[0]->vendor)){
                    $vendor = $this->Vendor_Model->findOne($user[0]->vendor)->row();
                    $user_vendor = $this->UserVendor_Model->findByVendor($user[0]->vendor)->result();
                }
                $status = 'Berhasil';
                $data = [
                    'session_id' => $session_id,
                    'user' => $user,
                    'user_vendor' => $user_vendor,
                    'vendor' => $vendor
                ];
            } else {
                $status = 'User Password Tidak Match';
                $data = [
                    'message' => $status
                ];
            }
            
            $this->response($data, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    function singleton_session_id($email){
        try {
            $session = $this->ApiSession_Model->checkSessionActive($email);
            if( empty($session)){
                $session_id = bin2hex(random_bytes(25));
                $data = array(
                    'session_id' => $session_id,
                    'email' => $email,
                    'created_at' => date('Y-m-d H:i:s')
                );
                $this->ApiSession_Model->save($data);
            }else{
                $session_id = $session->session_id;
            }
        } catch (Exception $exc) {
            $session_id = $exc->getMessage();
        }
        return $session_id;
    }

    function check_session($session_id){
        try {
            $session = $this->ApiSession_Model->findOne($session_id);
            $result = empty($session) ? FALSE : TRUE;
        } catch (Exception $exc) {
            $result = FALSE;
        }
        return $result;
    }
    
    function get_user_from_session($session_id){
        try {
            $session = $this->ApiSession_Model->findOne($session_id);
            if(empty($session->email)){
                throw new Exception('email tidak ketemu');
            }
            $user = $this->User_Model->findByEmail($session->email);
            if(empty($user)){
                throw new Exception('user tidak ketemu');
            }
            $user_id = $user[0]->id;
            
        } catch (Exception $exc) {
            $user_id = 0;
        }
        return $user_id;
    }
    
    
    // API PROJECT
    public function project_get(){
        try {
            $session_id = $this->get('session_id');
            if( ! $this->check_session($session_id)){
                throw new Exception('session anda telah habis');
            }
            
            $id = $this->get('id');
            if(!empty($id)){
                //$user_id = $this->get_user_from_session($session_id);
                $data =  $this->Project_Model->findOne($id)->result_array();
                if(empty($data)){
                    throw new Exception('Data Project tidak valid');
                }
            }else{
                //$user_id = $this->get_user_from_session($session_id);
                $data = $this->Project_Model->getAllByStatusAndVendor('project.id,project.wbs_id, project.iro_number, project.site_id_ibs, project.site_name, 
			project.status, project_assigment.assignment_type, project.sitac_start_date, project.work_status', 'on process', 1, false)->result();
            }
            $this->response($data, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    
    // API CANDIDATE
    public function candidate_get(){
        try {
            $session_id = $this->get('session_id');
            if( ! $this->check_session($session_id)){
                throw new Exception('session anda telah habis');
            }
            $id = $this->get('id');
            $order = $this->get('order');
            $order_type = $this->get('order_type');
            $project_id = $this->get('project_id');
            if(!empty($id)){
                $data =  $this->Candidate_Model->getCandidateById($id)->result_array();
                if(empty($data)){
                    throw new Exception('Data Candidate tidak valid');
                }
            }else{
                $data =  $this->Candidate_Model->get_all($order, $order_type, $project_id)->result();
            }
            $this->response($data, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function candidate_post(){
        try {
            $session_id = $this->post('session_id');
            if( ! $this->check_session($session_id)){
                throw new Exception('session anda telah habis');
            }
            // TODO : check duplikasi data candidate (1 project, 1 vendor bisa lebih dari 1 candidate)
            $data = array(
                'project_id' => $this->post('project_id'),
                'vendor_id' => $this->post('vendor_id'),
                'name' => $this->post('name'),
                'long' => $this->post('long'),
                'lat' => $this->post('lat'),
                'address' => $this->post('address'),
                'is_default' => $this->post('is_default'),
                'has_selected' => $this->post('has_selected'),
                'owner_name' => $this->post('owner_name'),
                'id_card' => $this->post('id_card'),
                'phone_number' => $this->post('phone_number'),
                'fax' => $this->post('fax'),
                'owner_address' => $this->post('owner_address'),
                'city' => $this->post('city'),
            );
            $result = $this->Candidate_Model->save($data);
            $this->response($result, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function candidate_put(){
        try {
            $session_id = $this->put('session_id');
            if( ! $this->check_session($session_id)){
                throw new Exception('session anda telah habis');
            }
            $candidate_id = $this->put('id');
            if( empty($candidate_id)){
                throw new Exception('id tidak ada');
            }
            $data = array(
                'project_id' => $this->put('project_id'),
                'vendor_id' => $this->put('vendor_id'),
                'name' => $this->put('name'),
                'long' => $this->put('long'),
                'lat' => $this->put('lat'),
                'address' => $this->put('address'),
                'is_default' => $this->put('is_default'),
                'has_selected' => $this->put('has_selected'),
                'owner_name' => $this->put('owner_name'),
            );
            $result = $this->Candidate_Model->update($candidate_id, $data);
            $this->response($result, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function candidate_delete(){
        try {
            $session_id = $this->delete('session_id');
            if( ! $this->check_session($session_id)){
                throw new Exception('session anda telah habis');
            }
            $id = $this->delete('id');
            $result = $this->Candidate_Model->delete($id);
            $this->response(TRUE, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    
    // API DOCUMENT SURVEY
    public function document_survey_get(){
        try {
            $session_id = $this->get('session_id');
            if( ! $this->check_session($session_id)){
                throw new Exception('session anda telah habis');
            }
            $id = $this->get('id');
            $candidate_id = $this->get('candidate_id');
            $rowno = empty($this->get('rowno')) ? 1 : $this->get('rowno');
            $rowperpage = empty($this->get('rowperpage')) ? 100 : $this->get('rowperpage');
            $search = empty($this->get('search')) ? "" : $this->get('search');
            if(!empty($id)){
                $data =  $this->CandidateDocument_Model->findOne($id)->result_array();
                if(empty($data)){
                    throw new Exception('Data Document Survey tidak valid');
                }
            }else{
                $data =  $this->CandidateDocument_Model->getDataSurveyApi($rowno, $rowperpage, $search, $candidate_id);
            }
            
            $this->response($data, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function document_survey_post(){
        try {
            $session_id = $this->post('session_id');
            if( ! $this->check_session($session_id)){
                throw new Exception('session anda telah habis');
            }
            
            
            
            $config = [];
            $config['upload_path'] = './uploads/attachment/survey/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['max_size'] = '2000';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $site_location_map = '';
            if (!$this->upload->do_upload('site_location_map')) {
                throw new Exception('masalah di upload site_location_map');
            } else {
                $site_location_map = $this->upload->data();
            }
            $site_layout = '';
            if (!$this->upload->do_upload('site_layout')) {
                throw new Exception('masalah di upload site_layout');
            } else {
                $site_layout = $this->upload->data();
            }
            $site_contour = '';
            if (!$this->upload->do_upload('site_contour')) {
                throw new Exception('masalah di upload site_contour');
            } else {
                $site_contour = $this->upload->data();
            }
            if (!empty($site_location_map) && !empty($site_layout) && !empty($site_contour)) {
                $attribute = [
                    'contractor' => $this->post('contractor'),
                    'project_manger' => $this->post('project_manger'),
                    'sitac_ho' => $this->post('sitac_ho'),
                    'rf' => $this->post('rf'),
                    'tx' => $this->post('tx'),
                    'site_id' => $this->post('site_id'),
                    'site_name' => $this->post('site_name'),
                    'nominal_long' => $this->post('nominal_long'),
                    'nominal_lat' => $this->post('nominal_lat'),
                    'region' => $this->post('region'),
                    'site_type' => $this->post('site_type'),
                    'search_radius' => $this->post('search_radius'),
                    'antena_height' => $this->post('antena_height'),
                    'candidate' => $this->post('candidate'),
                    'candidate_long' => $this->post('candidate_long'),
                    'candidate_lat' => $this->post('candidate_lat'),
                    'distance_from_nom' => $this->post('distance_from_nom'),
                    'azimuth' => $this->post('azimuth'),
                    'site_address' => $this->post('site_address'),
                    'city' => $this->post('city'),
                    'site_location' => $this->post('site_location'),
                    'tower_type' => $this->post('tower_type'),
                    'building_height' => $this->post('building_height'),
                    'floor_no' => $this->post('floor_no'),
                    'tower_height' => $this->post('tower_height'),
                    'space_dimension' => $this->post('space_dimension'),
                    'access_road' => $this->post('access_road'),
                    'access' => $this->post('access'),
                    'owner' => $this->post('owner'),
                    'address_owner' => $this->post('address_owner'),
                    'pic_owner' => $this->post('pic_owner'),
                    'phone_owner' => $this->post('phone_owner'),
                ];
                $attachment = [
                    'site_location_map' => $site_location_map['file_name'],
                    'site_layout' => $site_layout['file_name'],
                    'site_contour' => $site_contour['file_name'],
                ];
                $data = [
                    'project_id' => $this->post('project_id'),
                    'vendor_id' => $this->post('vendor_id'),
                    'candidate_id' => $this->post('candidate_id'),
                    'name' => 'SURVEY',
                    'code' => 'FM-STP-019',
                    'type' => 'SITAC SURVEY',
                    'status' => 'submitted',
                    'created_at' => date('Y-m-d H:i:s'),
                    'attribute' => json_encode($attribute), //nanti didecode
                    'attachment' => json_encode($attachment)
                ];
                $hasKomSitac = $this->Document_Model->getSpecificDocument($data['project_id'], 'COM SITAC')->row();
                $hasBapDoc = $this->CandidateDocument_Model->getSpecificDocument($data['project_id'], 'BAP')->row();

                if (!is_null($hasBapDoc) && !is_null($hasKomSitac)) {
                    $this->Project_Model->update($data['project_id'], array('work_status' => 'TSA'));
                }
                
                $data = $this->CandidateDocument_Model->save($data);
                if (!empty($data)) {
                    $template = $this->CandidateDocument_Model->findOne($data)->row_array();
                    $wbs_id = $this->Project_Model->findOne($template['project_id'])->row_array();
                    generateSurvey($template, $wbs_id);
                    
                }
            } else {
                throw new Exception($this->upload->display_errors());
            }
            $this->response($data, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    
    // API CREATE BAP
    public function create_bap_post(){
        try {
            $session_id = $this->post('session_id');
            if( ! $this->check_session($session_id)){
                throw new Exception('session anda telah habis');
            }
            
            
            
            $candidate = $this->Candidate_Model->getCandidateById($this->post('candidate_id'))->result_array();

            $this->attribute['candidate'] = $candidate;
            $input_post = array(
                'pic_ibs' => $this->post('pic_ibs'),
		'authorized_name' => $this->post('authorized_name'),
		'authorized_id_card' => $this->post('authorized_id_card'),
		'authorized_phone_number' => $this->post('authorized_phone_number'),
		'authorized_address' => $this->post('authorized_address'),
		'offer_date' => $this->post('offer_date'),
		'building_type' => $this->post('building_type'),
		'rent_price' => $this->post('rent_price'),
		'rent_period' => $this->post('rent_period'),
		'space_dimension' => $this->post('space_dimension'),
		'access_road' => $this->post('access_road'),
		'access_road_type' => $this->post('access_road_type'),
		'ppn' => $this->post('ppn'),
		'pph' => $this->post('pph'),
		'notary_fee' => $this->post('notary_fee'),
		'electricity_cost' => $this->post('electricity_cost'),
		'note' => $this->post('note'),
            );
            $this->attribute['bap'] = $input_post;


            $candidate_document = array(
                'candidate_id' => $this->post('candidate_id'),
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
                $error = error_get_last();
                throw new Exception($error['message']);
            } else {
                $filename = 'BAP-' . time() . '.pdf';
                $local_file = './uploads/bap/' . $filename;
                file_put_contents($local_file, $result);
                $this->CandidateDocument_Model->update($document_id, array('path' => $filename));
            }
            $this->response($document_id, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    
    // API CREATE BAK
    public function create_bak_post(){
        try {
            $session_id = $this->post('session_id');
            if( ! $this->check_session($session_id)){
                throw new Exception('session anda telah habis');
            }
            
            
            
            $candidate = $this->Candidate_Model->getCandidateById($this->post('candidate_id'))->result_array();
            $input_post = array(
                'negotiation_by' => $this->post('negotiation_by'),
		'negotiation_at' => $this->post('negotiation_at'),
		'land_type' => $this->post('land_type'),
		'first_person' => $this->post('first_person'),
		'second_person' => $this->post('second_person'),
		'owner_type' => $this->post('owner_type'),
		'authorized_name' => $this->post('authorized_name'),
		'authorized_id_card' => $this->post('authorized_id_card'),
		'authorized_phone_number' => $this->post('authorized_phone_number'),
		'authorized_address' => $this->post('authorized_address'),
		'total_price_rent' => $this->post('total_price_rent'),
		'be_regarded' => $this->post('be_regarded'),
		'rental_period' => $this->post('rental_period'),
		'payment_type' => $this->post('payment_type'),
		'bank_name' => $this->post('bank_name'),
		'account_number' => $this->post('account_number'),
		'account_name' => $this->post('account_name'),
		'phase_1_percent' => $this->post('phase_1_percent'),
		'phase_1_nominal' => $this->post('phase_1_nominal'),
		'phase_2_percent' => $this->post('phase_2_percent'),
		'phase_2_nominal' => $this->post('phase_2_nominal'),
		'note' => $this->post('note'),
		'bumi' => $this->post('bumi'),
		'bangunan' => $this->post('bangunan'),
		'pkp' => $this->post('pkp'),
		'pph' => $this->post('pph'),
		'rent_object_status' => $this->post('rent_object_status'),
		'status_hak_object' => $this->post('status_hak_object'),
		'status_hak_object_nomor' => $this->post('status_hak_object_nomor'),
		'status_hak_object_lain' => $this->post('status_hak_object_lain'),
		'user_ibs_name' => $this->post('user_ibs_name'),
		'user_ibs_position' => $this->post('user_ibs_position'),
		'saksi_1_name' => $this->post('saksi_1_name'),
		'saksi_1_name' => $this->post('saksi_1_name'),
            );
            $this->attribute['candidate'] = $candidate;
            $this->attribute['bak'] = $input_post;


            $candidate_document = array(
                'candidate_id' => $this->post('candidate_id'),
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
            $this->Project_Model->update($candidate_document['project_id'], array('work_status' => 'IW'));

            $api_endpoint = "https://selectpdf.com/api2/convert/";

            $layout_url = site_url('/public/layout/bak/' . $document_id);
            $parameters = array('key' => $this->config->item('pdf_key'), 'url' => $layout_url,
                'web_page_width' => '816',
                'page_numbers' => 'False');
            $result = @file_get_contents("$api_endpoint?" . http_build_query($parameters));
            if (!$result) {
                $error = error_get_last();
                throw new Exception($error['message']);
            } else {
                // set HTTP response headers
                $filename = 'BAK-' . time() . '.pdf';
                $local_file = './uploads/bak/' . $filename;
                file_put_contents($local_file, $result);
                $this->CandidateDocument_Model->update($document_id, array('path' => $filename));
            }
            
            
            $this->response($document_id, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    
    // API IZIN WARGA
    public function persetujuan_post(){
        try {
            $session_id = $this->post('session_id');
            if( ! $this->check_session($session_id)){
                throw new Exception('session anda telah habis');
            }
            
            $config = [];
            $config['upload_path'] = './uploads/iw/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
            $config['max_size'] = '2000';
            $config['encrypt_name'] = TRUE;
            $upload_path = 'uploads/iw/';

            $this->load->library('upload', $config);
            $error = [];

            if (!$this->upload->do_upload('surat_persetujuan_lingkungan')) {
                throw new Exception('masalah di upload surat_persetujuan_lingkungan');
            } else {
                $data = $this->upload->data();
                $file_name = $upload_path . $data['raw_name'] . $data['file_ext'];
                $candidate = $this->Candidate_Model->getCandidateById($this->post('candidate_id'))->row();
                
                $candidate_document = array(
                    'candidate_id' => $this->post('candidate_id'),
                    'project_id' => $candidate->project_id,
                    'vendor_id' => $candidate->vendor_id,
                    'name' => 'Surat Persetujuan Lingkungan',
                    'code' => 'FM-STP-018',
                    'type' => 'IW',
                    'path' => $file_name,
                    'status' => 'submitted',
                    'created_at' => date('Y-m-d H:i:s')
                );

                $docIw = $this->CandidateDocument_Model->getCountSpecificDocument($candidate_document['project_id'], 'IW')->result_array();
                
                if (count($docIw) >= 5) {
                    $this->Project_Model->update($candidate_document['project_id'], array('work_status' => 'APD'));
                }
                $document = $this->CandidateDocument_Model->save($candidate_document);
            }
            
            
            $this->response($document, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function upload_izinwarga_post(){
        try {
            $session_id = $this->post('session_id');
            if( ! $this->check_session($session_id)){
                throw new Exception('session anda telah habis');
            }
            
            
            $config = [];
            $config['upload_path'] = './uploads/iw/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
            $config['max_size'] = '2000';
            $config['encrypt_name'] = TRUE;
            $upload_path = 'uploads/iw/';

            $this->load->library('upload', $config);
            $error = [];

            if (!$this->upload->do_upload('denah_layout_izin_warga')) {
                throw new Exception('masalah di upload denah_layout_izin_warga');
            } else {
                $data = $this->upload->data();
                $file_name = $upload_path . $data['raw_name'] . $data['file_ext'];
                $candidate = $this->Candidate_Model->getCandidateById($this->post('candidate_id'))->row();
                $candidate_document = array(
                    'candidate_id' => $this->post('candidate_id'),
                    'project_id' => $candidate->project_id,
                    'vendor_id' => $candidate->vendor_id,
                    'name' => 'Denah Layout Izin Warga',
                    'code' => 'FM-STP-018',
                    'type' => 'IW',
                    'path' => $file_name,
                    'status' => 'submitted',
                    'created_at' => date('Y-m-d H:i:s')
                );

                $docIw = $this->CandidateDocument_Model->getCountSpecificDocument($candidate_document['project_id'], 'IW')->result_array();

                if (count($docIw) >= 5) {
                    $this->Project_Model->update($candidate_document['project_id'], array('work_status' => 'APD'));
                }
                $document = $this->CandidateDocument_Model->save($candidate_document);
            }
            
            $this->response($document, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function upload_copyktp_post(){
        try {
            $session_id = $this->post('session_id');
            if( ! $this->check_session($session_id)){
                throw new Exception('session anda telah habis');
            }
            
            
            $config = [];
            $config['upload_path'] = './uploads/iw/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
            $config['max_size'] = '2000';
            $config['encrypt_name'] = TRUE;
            $upload_path = 'uploads/iw/';

            $this->load->library('upload', $config);
            $error = [];

            if (!$this->upload->do_upload('foto_copy_ktp_warga')) {
                throw new Exception('masalah di upload foto_copy_ktp_warga');
            } else {
                $data = $this->upload->data();
                $file_name = $upload_path . $data['raw_name'] . $data['file_ext'];
                $candidate = $this->Candidate_Model->getCandidateById($this->post('candidate_id'))->row();
                $candidate_document = array(
                    'candidate_id' => $this->post('candidate_id'),
                    'project_id' => $candidate->project_id,
                    'vendor_id' => $candidate->vendor_id,
                    'name' => 'Foto copy KTP Warga',
                    'code' => '',
                    'type' => 'IW',
                    'path' => $file_name,
                    'status' => 'submitted',
                    'created_at' => date('Y-m-d H:i:s')
                );

                $docIw = $this->CandidateDocument_Model->getCountSpecificDocument($candidate_document['project_id'], 'IW')->result_array();

                if (count($docIw) >= 5) {
                    $this->Project_Model->update($candidate_document['project_id'], array('work_status' => 'APD'));
                }
                $document = $this->CandidateDocument_Model->save($candidate_document);
            }
            
            
            $this->response($document, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function upload_rekdesa_post(){
        try {
            $session_id = $this->post('session_id');
            if( ! $this->check_session($session_id)){
                throw new Exception('session anda telah habis');
            }
            
            
            $config = [];
            $config['upload_path'] = './uploads/iw/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
            $config['max_size'] = '2000';
            $config['encrypt_name'] = TRUE;
            $upload_path = 'uploads/iw/';

            $this->load->library('upload', $config);
            $error = [];

            if (!$this->upload->do_upload('rekomendasi_desa')) {
                throw new Exception('masalah di upload rekomendasi_desa');
            } else {
                $data = $this->upload->data();
                $file_name = $upload_path . $data['raw_name'] . $data['file_ext'];
                $candidate = $this->Candidate_Model->getCandidateById($this->post('candidate_id'))->row();
                $candidate_document = array(
                    'candidate_id' => $this->post('candidate_id'),
                    'project_id' => $candidate->project_id,
                    'vendor_id' => $candidate->vendor_id,
                    'name' => 'Rekomendasi Desa',
                    'code' => '',
                    'type' => 'IW',
                    'path' => $file_name,
                    'status' => 'submitted',
                    'created_at' => date('Y-m-d H:i:s')
                );

                $docIw = $this->CandidateDocument_Model->getCountSpecificDocument($candidate_document['project_id'], 'IW')->result_array();

                if (count($docIw) >= 5) {
                    $this->Project_Model->update($candidate_document['project_id'], array('work_status' => 'APD'));
                }
                $document = $this->CandidateDocument_Model->save($candidate_document);
            }
            
            
            $this->response($document, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function upload_rekkecamatan_post(){
        try {
            $session_id = $this->post('session_id');
            if( ! $this->check_session($session_id)){
                throw new Exception('session anda telah habis');
            }
            
            
            $config = [];
            $config['upload_path'] = './uploads/iw/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
            $config['max_size'] = '2000';
            $config['encrypt_name'] = TRUE;
            $upload_path = 'uploads/iw/';

            $this->load->library('upload', $config);
            $error = [];

            if (!$this->upload->do_upload('rekomendasi_kecamatan')) {
                throw new Exception('masalah di upload rekomendasi_kecamatan');
            } else {
                $data = $this->upload->data();
                $file_name = $upload_path . $data['raw_name'] . $data['file_ext'];
                $candidate = $this->Candidate_Model->getCandidateById($this->post('candidate_id'))->row();
                $candidate_document = array(
                    'candidate_id' => $this->post('candidate_id'),
                    'project_id' => $candidate->project_id,
                    'vendor_id' => $candidate->vendor_id,
                    'name' => 'Rekomendasi Kecamatan',
                    'code' => '',
                    'type' => 'IW',
                    'path' => $file_name,
                    'status' => 'submitted',
                    'created_at' => date('Y-m-d H:i:s')
                );

                $docIw = $this->CandidateDocument_Model->getCountSpecificDocument($candidate_document['project_id'], 'IW')->result_array();

                if (count($docIw) >= 5) {
                    $this->Project_Model->update($candidate_document['project_id'], array('work_status' => 'APD'));
                }
                $document = $this->CandidateDocument_Model->save($candidate_document);
            }
            
            
            $this->response($document, REST_Controller::HTTP_OK);
        } catch (Exception $exc) {
            $msg = $exc->getMessage();
            $this->response(['error' => $msg], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
}
