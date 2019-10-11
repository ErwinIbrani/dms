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
        $allcount             = $this->ComSitac_Model->getrecordCount($search_text);
        $records              = $this->ComSitac_Model->getData($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'project/comsitac/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;

        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('project/com-sitac/index-assignment', [
            'pagination' => $pagination,
            'projects'   => $records,
            'search'     => $search_text,
            'breadcrumb' => $breadcrumb,
        ]);
    }

    public function create($project_id, $vendor_id)
    {
        $this->make_bread->add('Index', 'project/comsitac/index', TRUE);
        $this->make_bread->add('Create');
        $breadcrumb = $this->make_bread->output();
        return view('project/com-sitac/create', [
            'breadcrumb'   => $breadcrumb,
            'vendor_id'    => $vendor_id,
            'project_id'   => $project_id,
        ]);
    }

    public function store()
    {
        $config = [];
        $config['upload_path']   = './uploads/comsitac/';
        $config['allowed_types'] = 'xlsx|xls|';
        $config['max_size']      = '2000';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('path')) {
                $error = ['error' => $this->upload->display_errors()];
                $this->session->set_flashdata('error', $error['error']);
                redirect("project/project/document/" . $this->input->post('project_id'), 'refresh');
            } else {
                $upload = $this->upload->data();
                $data = [
                    'project_id' => $this->input->post('project_id'),
                    'vendor_id'  => $this->input->post('vendor_id'),
                    'name'       => 'COM SITAC',
                    'code'       => 'FM-STP-002',
                    'type'       => 'SITAC',
                    'status'     => 'Done',
                    'path'       => $upload['file_name'],
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];
               $this->ComSitac_Model->save($data);
               redirect("project/comsitac/index", 'refresh');
         }
    }




    /*kode dibawah tidak digunakan*/

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