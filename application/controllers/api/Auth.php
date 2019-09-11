<?php
require APPPATH . 'libraries/REST_Controller.php';

class Auth extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['User_Model',]);
        $this->load->library(['ion_auth']);
    }

    public function login_post()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == TRUE)
        {
            $remember = true;
            if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password'), $remember))
            {
                $user = $this->User_Model->findByEmail($this->input->post('email'));
                if($user){
                    $this->response([
                        'status'  => TRUE,
                        'message' => 'User login successful.',
                        'data'    => $user,
                    ], REST_Controller::HTTP_OK);
                 }else{
                    $this->response("No Data Found.", REST_Controller::HTTP_BAD_REQUEST);
                }
            }
            else{
                $this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
            }
        }
        else
        {
            $this->response("Please Input Fields", REST_Controller::HTTP_BAD_REQUEST);
        }

    }


}