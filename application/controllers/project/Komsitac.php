<?php

class Komsitac extends CI_Controller
{

    public function __Construct()
    {
        parent ::__construct();
        $this->load->model(['Project_Model', 'KomSitac_Model']);
        $this->load->helper('custom');
        authentication($this->ion_auth->logged_in());
    }

    public function create($id)
    {
        $this->make_bread->add('Index', 'project/project/document/'.$id, TRUE);
        $this->make_bread->add('Create');
        $breadcrumb = $this->make_bread->output();
        return view('project/kom-sitac/create', [
            'breadcrumb'  =>  $breadcrumb,
            'id_project'  =>  $id
        ]);
    }

    public function store()
    {
      $this->form_validation->set_rules('name', 'Name', 'trim|required');
      $this->form_validation->set_rules('code', 'Code', 'trim|required');
      $this->form_validation->set_rules('type', 'Type', 'trim|required');
      if (empty($_FILES['path']['name']))
      {
            $this->form_validation->set_rules('path', 'Document', 'required');
      }
     if ($this->form_validation->run() == FALSE) {
            $this->make_bread->add('Index', 'project/project/document/'.$this->input->post('project_id'), TRUE);
            $this->make_bread->add('Create');
            $breadcrumb = $this->make_bread->output();
            return view('project/kom-sitac/create', [
                'breadcrumb'  =>  $breadcrumb,
                'id_project'  =>  $this->input->post('project_id')
            ]);
        }else {
                $new_name = $this->input->post('project_id') . '-' . $this->input->post('name');
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
                }
                else {
                   $upload  = $this->upload->data();
                    $getData = $this->Project_Model->findOne($this->input->post('project_id'))->row_array();
                    $data = [
                        'project_id' => $this->input->post('project_id'),
                        'vendor_id'  => $getData['vendor_id'],
                        'name'       => $this->input->post('name'),
                        'code'       => $this->input->post('code'),
                        'type'       => $this->input->post('type'),
                        'path'       => $upload['file_name']
                    ];
                    $codition = $this->KomSitac_Model->save($data);
                    if($codition == TRUE) {
                        $this->Project_Model->update($this->input->post('project_id'),  ['status' => 'SITAC SURVEY']);
                        $this->session->set_flashdata('success', 'Data Uploaded');
                        redirect("project/project/document/" . $this->input->post('project_id'), 'refresh');
                    }
                }
           }
      }
}