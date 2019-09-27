<?php

class Comsitac extends CI_Controller
{

    public function __Construct()
    {
        parent::__construct();
        $this->load->model(['Project_Model', 'ComSitac_Model']);
        $this->load->helper('custom');
        authentication($this->ion_auth->logged_in());
    }

    public function create($id)
    {
        $this->make_bread->add('Index', 'project/project/document/' . $id, TRUE);
        $this->make_bread->add('Create');
        $breadcrumb = $this->make_bread->output();
        return view('project/com-sitac/create', [
            'breadcrumb' => $breadcrumb,
            'id_project' => $id
        ]);
    }

    public function store()
    {
        $getData  = $this->Project_Model->findOne($this->input->post('project_id'))->row_array();
        $config = [];
        $config['upload_path']   = './uploads/comsitac/';
        $config['allowed_types'] = 'xlsx|xls|';
        $config['max_size']      = '2000';
        $config['encrypt_name']  = TRUE;
        //$config['file_name'] = $new_name;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('path')) {
                $error = ['error' => $this->upload->display_errors()];
                $this->session->set_flashdata('error', $error['error']);
                redirect("project/project/document/" . $this->input->post('project_id'), 'refresh');
            } else {
                $upload = $this->upload->data();
                $data = [
                    'project_id' => $this->input->post('project_id'),
                    'vendor_id'  => $getData['vendor_id'],
                    'name'       => 'COM_SITAC',
                    'code'       => 'FM-STP-002',
                    'type'       => 'SITAC',
                    'status'     => 'waiting',
                    'path'       => $upload['file_name'],
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];
                $codition = $this->ComSitac_Model->save($data);
                if ($codition == TRUE) {
                    $this->Project_Model->update($this->input->post('project_id'), ['status' => 'SITAC_SURVEY']);
                    $this->session->set_flashdata('success', 'Data Uploaded');
                    redirect("project/project/document/" . $this->input->post('project_id'), 'refresh');
                }
            }
    }

    public function recreate($projectID = 0, $documenntID = 0)
    {
        $this->make_bread->add('Index', 'project/project/document/' . $projectID, TRUE);
        $this->make_bread->add('Recreate');
        $breadcrumb = $this->make_bread->output();
        $model = $this->ComSitac_Model->findOne($documenntID)->row();

        return view('project/com-sitac/recreate', [
            'breadcrumb' => $breadcrumb,
            'id_project' => $projectID,
            'model' => $model
        ]);
    }

    public function restore()
    {
         $getData  = $this->Project_Model->findOne($this->input->post('project_id'))->row_array();
         $config = [];
         $config['upload_path']   = './uploads/comsitac/';
         $config['allowed_types'] = 'xlsx|xls|csv|pdf|';
         $config['max_size']      = '2000';
         $config['encrypt_name']  = TRUE;
         $this->load->library('upload', $config);
        if (!$this->upload->do_upload('path')) {
             $error = ['error' => $this->upload->display_errors()];
             $this->session->set_flashdata('error', $error['error']);
             redirect("project/project/document/" . $this->input->post('project_id'), 'refresh');
         } else {
             $upload = $this->upload->data();
             $recreate = [
                        'project_id' => $this->input->post('project_id'),
                        'vendor_id'  => $getData['vendor_id'],
                        'status'     => 'waiting',
                        'path'       => $upload['file_name'],
                        'updated_at' => date('Y-m-d H:i:s')
                    ];
            $this->ComSitac_Model->save($recreate);
            $this->session->set_flashdata('success', 'Data Reupload');
            redirect("project/project/document/" . $this->input->post('project_id'), 'refresh');
          }
       }


}