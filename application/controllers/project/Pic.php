<?php

class Pic extends CI_Controller
{

    public function __Construct()
    {
        parent ::__construct();
        $this->load->model(['InternalUser_Model', 'Project_Model', 'Pic_Model', 'User_Model']);
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
        $allcount             = $this->Pic_Model->getrecordCount($search_text);
        $records              = $this->Pic_Model->getData($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'project/pic/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;

        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('project/pic/index', [
            'pagination' => $pagination,
            'pics'       => $records,
            'search'     => $search_text,
            'breadcrumb' => $breadcrumb,
          ]);
      }

      public function create()
      {
          $this->make_bread->add('Index', 'project/pic/index', TRUE);
          $this->make_bread->add('Create');
          $breadcrumb = $this->make_bread->output();
          $projects   = $this->Project_Model->project()->result();
          $users      = $this->InternalUser_Model->userInternal()->result();

          return view('project/pic/create', [
                      'projects'   =>  $projects,
                      'users'      =>  $users,
                      'breadcrumb' =>  $breadcrumb
          ]);
      }


    public function store()
    {
        $this->form_validation->set_rules('project_id', 'Project', 'required');
        $this->form_validation->set_rules('layer', 'Layer', 'required');
        $this->form_validation->set_rules('username', 'Email', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->make_bread->add('Index', 'project/pic/index', TRUE);
            $this->make_bread->add('Create');
            $breadcrumb = $this->make_bread->output();
            $projects   = $this->Project_Model->project()->result();
            $users      = $this->InternalUser_Model->userInternal()->result();

            return view('project/pic/create', [
                'projects'   =>  $projects,
                'users'      =>  $users,
                'breadcrumb' =>  $breadcrumb
            ]);
        }
        else {
            $cek = $this->Pic_Model->duplicate($this->input->post('username'), $this->input->post('project_id'));
            if($cek->num_rows() > 0){
                $this->session->set_flashdata('error', 'Data Duplicate');
                redirect("project/pic/create", 'refresh');
            }else {
                $getData = $this->User_Model->findByUsername($this->input->post('username'))->row();
                $data = [
                    'project_id'  =>  $this->input->post('project_id'),
                    'layer'       =>  $this->input->post('layer'),
                    'username'    =>  $getData->username,
                    'email'       =>  $getData->email,
                ];
                $this->Pic_Model->save($data);
                $this->session->set_flashdata('success', 'Data Inserted');
                redirect("project/pic/create", 'refresh');
            }
        }
    }

    public function edit($id)
    {
        $this->make_bread->add('Index', 'project/pic/index', TRUE);
        $this->make_bread->add('Edit');
        $breadcrumb = $this->make_bread->output();
        $projects   = $this->Project_Model->project()->result();
        $users      = $this->InternalUser_Model->userInternal()->result();
        $model      = $this->Pic_Model->findOne($id)->row();


        return view('project/pic/edit', [
            'projects'     => $projects,
            'users'        => $users,
            'model'        => $model,
            'breadcrumb'   => $breadcrumb
        ]);
    }

    public function update()
    {
        $this->form_validation->set_rules('project_id', 'Project Name', 'required');
        $this->form_validation->set_rules('username', 'Email', 'required');
        $this->form_validation->set_rules('layer', 'Layer', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->make_bread->add('Index', 'project/pic/index', TRUE);
            $this->make_bread->add('Edit');
            $breadcrumb = $this->make_bread->output();
            $projects   = $this->Project_Model->project()->result();
            $users      = $this->InternalUser_Model->userInternal()->result();
            $model      = $this->Pic_Model->findOne($this->input->post('id'))->row();
            return view('project/pic/edit', [
                'projects'     => $projects,
                'users'        => $users,
                'model'        => $model,
                'breadcrumb'   => $breadcrumb
            ]);
        }
        else {
            $data  = $this->Pic_Model->findOne($this->input->post('id'))->row();
            if($data->username == $this->input->post('username') && $data->project_id == $this->input->post('project_id'))
            {
                $update = [
                    'layer'   =>  $this->input->post('layer'),
                ];
                $this->Pic_Model->update($this->input->post('id'), $update);
                $this->session->set_flashdata('success', 'Data Edited');
                redirect("project/pic/index", 'refresh');
            }else{
                $cek = $this->Pic_Model->duplicate($this->input->post('username'), $this->input->post('project_id'));
                if($cek->num_rows() > 0){
                    $this->session->set_flashdata('error', 'Data Duplicate');
                    redirect("project/pic/create", 'refresh');
                }else {
                    $getData = $this->User_Model->findByUsername($this->input->post('username'))->row();
                    $update  = [
                        'project_id'  =>  $this->input->post('project_id'),
                        'layer'       =>  $this->input->post('layer'),
                        'username'    =>  $getData->username,
                        'email'       =>  $getData->email,
                    ];
                    $this->Pic_Model->update( $this->input->post('id'), $update);
                    $this->session->set_flashdata('success', 'Data Inserted');
                    redirect("project/pic/create", 'refresh');
                }
            }
        }
    }

    public function destroy($id)
    {
        $this->Pic_Model->delete($id);
        $this->session->set_flashdata('success', 'Data Deleted');
        redirect("project/pic/index", 'refresh');
    }

}