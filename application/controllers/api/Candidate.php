<?php
require APPPATH . 'libraries/REST_Controller.php';

class Candidate extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Region_Model', 'Province_Model','City_Model', 
            'UserVendor_Model', 'Vendor_Model', 'Project_Model']);
        $this->load->library(['ion_auth', 'form_validation']);
    }

    public function index_post()
    {
        try {
            $remember = FALSE;
            if ($this->ion_auth->login($this->post('email'), $this->post('password'), $remember)) {
                $session_id = $this->singleton_session_id();
                $status = 'Berhasil';
                $data = [
                    'session_id' => $session_id,
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
    
    function singleton_session_id(){
        // TODO : mengembalikan session id yang masih aktif jika ada. Jika belum create session id dan save to table
        $session_id = bin2hex(random_bytes(25));
        return $session_id;
    }

}
