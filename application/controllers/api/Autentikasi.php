<?php
require APPPATH . 'libraries/REST_Controller.php';

class Autentikasi extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['ApiSession_Model', 'Region_Model', 'Province_Model','City_Model', 
            'UserVendor_Model', 'Vendor_Model', 'Project_Model']);
        $this->load->library(['ion_auth', 'form_validation']);
    }

    public function index_post()
    {
        try {
            $remember = FALSE;
            if ($this->ion_auth->login($this->post('email'), $this->post('password'), $remember)) {
                $session_id = $this->singleton_session_id($this->post('email'));
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

}
