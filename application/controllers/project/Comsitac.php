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
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('code', 'Code', 'trim|required');
        $this->form_validation->set_rules('type', 'Type', 'trim|required');
        if (empty($_FILES['path']['name'])) {
            $this->form_validation->set_rules('path', 'Document', 'required');
        }
        if ($this->form_validation->run() == FALSE) {
            $this->make_bread->add('Index', 'project/project/document/' . $this->input->post('project_id'), TRUE);
            $this->make_bread->add('Create');
            $breadcrumb = $this->make_bread->output();
            return view('project/com-sitac/create', [
                'breadcrumb' => $breadcrumb,
                'id_project' => $this->input->post('project_id')
            ]);
        } else {
            $getData  = $this->Project_Model->findOne($this->input->post('project_id'))->row_array();
            $new_name = $this->input->post('project_id') . '-' . $this->input->post('name').'-'.$getData['vendor_id'];
            $config = [];
            $config['upload_path'] = './uploads/comsitac/';
            $config['allowed_types'] = 'xlsx|xls|csv|pdf|';
            $config['max_size'] = '2000';
            //$config['encrypt_name']  = TRUE;
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('path')) {
                $error = ['error' => $this->upload->display_errors()];
                $this->session->set_flashdata('error', $error['error']);
                redirect("project/project/document/" . $this->input->post('project_id'), 'refresh');
            } else {
                $upload = $this->upload->data();
                $data = [
                    'project_id' => $this->input->post('project_id'),
                    'vendor_id' => $getData['vendor_id'],
                    'name' => $this->input->post('name'),
                    'code' => $this->input->post('code'),
                    'type' => $this->input->post('type'),
                    'status' => 'waiting',
                    'path' => $upload['file_name'],
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];
                $codition = $this->ComSitac_Model->save($data);
                if ($codition == TRUE) {
                    $this->Project_Model->update($this->input->post('project_id'), ['status' => 'SITAC SURVEY']);
                    $this->session->set_flashdata('success', 'Data Uploaded');
                    redirect("project/project/document/" . $this->input->post('project_id'), 'refresh');
                }
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
        $this->form_validation->set_rules('type', 'Type', 'trim|required');
        if (empty($_FILES['path']['name'])) {
            $this->form_validation->set_rules('path', 'Document', 'required');
        }
        $model = $this->ComSitac_Model->findOne($this->input->post('id'))->row();
        if ($this->form_validation->run() == FALSE) {
            $this->make_bread->add('Index', 'project/project/document/' . $this->input->post('project_id'), TRUE);
            $this->make_bread->add('Create');
            $breadcrumb = $this->make_bread->output();
            return view('project/com-sitac/recreate', [
                'breadcrumb' => $breadcrumb,
                'id_project' => $this->input->post('project_id'),
                'model' => $model
            ]);
        } else {
            if (is_file('./uploads/comsitac/' . $model->path) && @unlink('./uploads/comsitac/' . $model->path)) {
                true;
            }
                $getData  = $this->Project_Model->findOne($this->input->post('project_id'))->row_array();
                $new_name = $this->input->post('project_id') . '-' . $this->input->post('name').'-'.$getData['vendor_id'];
                $config = [];
                $config['upload_path'] = './uploads/comsitac/';
                $config['allowed_types'] = 'xlsx|xls|csv|pdf|';
                $config['max_size'] = '2000';
                //$config['encrypt_name']  = TRUE;
                $config['file_name'] = $new_name;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('path')) {
                    $error = ['error' => $this->upload->display_errors()];
                    $this->session->set_flashdata('error', $error['error']);
                    redirect("project/project/document/" . $this->input->post('project_id'), 'refresh');
                } else {
                    $upload = $this->upload->data();
                    $update = [
                        'project_id' => $this->input->post('project_id'),
                        'vendor_id' => $getData['vendor_id'],
                        'name' => $this->input->post('name'),
                        'code' => $this->input->post('code'),
                        'type' => $this->input->post('type'),
                        'status' => 'waiting',
                        'path' => $upload['file_name'],
                        'updated_at' => date('Y-m-d H:i:s')
                    ];
                    $this->ComSitac_Model->update($this->input->post('id'), $update);
                    $this->session->set_flashdata('success', 'Data Reupload');
                    redirect("project/project/document/" . $this->input->post('project_id'), 'refresh');
                  }
              }
         }

}