<?php

class AssignProjectOLD extends CI_Controller
{

    public function __Construct()
    {
        parent::__construct();
        $this->load->model(['Tmplanning_Model', 'Project_Model', 'UserVendor_Model', 'User_Model',  'Document_Model', 'Vendor_Model', 'Group_Model', 'Role_Model']);
        $this->lang->load('auth');
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
        $allcount             = $this->Project_Model->getrecordCount($search_text);
        $records              = $this->Project_Model->getData($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'procurement/project/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('procurement/project/index', [
            'pagination' => $pagination,
            'projects'   => $records,
            'search'     => $search_text,
            'breadcrumb' => $breadcrumb,
        ]);
    }

    public function create()
    {
        $this->make_bread->add('Index', 'procurement/project/index', TRUE);
        $this->make_bread->add('Create');
        $breadcrumb = $this->make_bread->output();
        $vendor     = $this->Vendor_Model->vendor()->result();
        $project    = $this->Tmplanning_Model->getData()->result();

        $userVendors= $this->User_Model->vendorPIC()->result();
        $pic_users  = $this->Group_Model->findByPIC()->result();

        $userIbs    = $this->User_Model->UserIBS()->result();
        $ibs_users  = $this->Group_Model->findByRoleIbs()->result();

        return view('procurement/project/create', [
            'vendors'      => $vendor,
            'projects'     => $project,
            'userVendors'  => $userVendors,
            'pic_users'    => $pic_users,
            'userIbs'      => $userIbs,
            'ibs_users'    => $ibs_users,
            'breadcrumb'   => $breadcrumb
        ]);
    }

    public function store()
    {
        foreach ($this->input->post('addmore') as $key => $value) {

          var_dump($value);

        }
        exit();
       $cek = $this->Project_Model->duplicate($this->input->post('wbs_id'), $this->input->post('vendor_id'));
         if($cek->num_rows() > 0){
            $this->session->set_flashdata('error', 'Data Duplicate');
             redirect("procurement/project/create", 'refresh');
            }else {
                $getData = $this->Tmplanning_Model->findByWBS($this->input->post('wbs_id'))->row_array();
                $data = [
                    'wbs_id'           =>  $getData['td_planning_detail_wbs_id'],
                    'vendor_id'        =>  $this->input->post('vendor_id'),
                    'iro_number'       =>  $getData['tm_planning_iro_number'],
                    'project'          =>  $getData['tm_planning_project'],
                    'work_group'       =>  $getData['tm_planning_work_group'],
                    'owner_project'    =>  $getData['tm_planning_owner_project'],
                    'project_type'     =>  $getData['tm_planning_project_type'],
                    'pic_type'         =>  $getData['tm_planning_pic_project'],
                    'tenant'           =>  $getData['tm_planning_tenant'],
                    'sa_type'          =>  $getData['tm_planning_sa_type'],
                    'start_date'       =>  $getData['tm_planning_start_date'],
                    'end_date'         =>  $getData['tm_planning_finish_date'],
                    'status_planning'  =>  $getData['tm_planning_is_status'],
                    'created_by'       =>  $this->ion_auth->user()->row()->id, //$getData['tm_planning_created_by'],
                   // 'updated_by'       =>  $getData['tm_planning_updated_by'],
                    'company_code'     =>  $getData['tm_planning_company_code'],
                    'spk_number'       =>  $getData['tm_planning_spk_number'],
                    'site_id_ibs'      =>  $getData['td_planning_detail_site_id_ibs'],
                    'site_id_tenant'   =>  $getData['td_planning_detail_site_id_tenant'],
                    'site_name'        =>  $getData['td_planning_detail_site_name'],
                    'site_type'        =>  $getData['td_planning_detail_site_type'],
                    'tower_height'     =>  $getData['td_planning_detail_tower_hight'],
                    'building_height'  =>  $getData['td_planning_detail_building_height'],
                    'region'           =>  $getData['td_planning_detail_region'],
                    'province_code'    =>  $getData['td_planning_detail_province_code'],
                    'city_code'        =>  $getData['td_planning_detail_city_code'],
                    'address'          =>  $getData['td_planning_detail_address'],
                    'longitude'        =>  $getData['td_planning_detail_longitude'],
                    'latitude'         =>  $getData['td_planning_detail_latitude'],
                    'status'           =>  'COM_SITAC',
                    'created_at'       =>  date('Y-m-d H:i:s'),
                    'updated_at'       =>  date('Y-m-d H:i:s')
                ];
                $this->db->trans_start();
                $model =  $this->Project_Model->save($data);
                $this->VendorProject_Model->save(['project_id' => $model,
                                                  'vendor_id'  => $this->input->post('vendor_id'),
                                                  'status'     => 'New',
                                                  'created_at' => date('Y-m-d H:i:s')]);

                $this->Role_Model->save(['user_id'    => $this->input->post('user_pic_id'),
                                         'group_id'   => $this->input->post('role_pic_id'),
                                         'project_id' => $model
                                         ]);

                $this->Role_Model->save(['user_id'    => $this->input->post('user_pic_id'),
                     'group_id'   => $this->input->post('role_pic_id'),
                     'project_id' => $model
                 ]);

                $this->db->trans_complete();
                if ($this->db->trans_status() === FALSE) {
                    $this->db->trans_rollback();
                    //return 0;
                    $this->session->set_flashdata('success', 'Something Wrong');
                    redirect("procurement/project/index", 'refresh');
               }
                $this->session->set_flashdata('success', 'Data Inserted');
                redirect("procurement/project/index", 'refresh');
          }
    }

    public function view($id)
    {
        $this->make_bread->add('Index', 'procurement/project/index', TRUE);
        $this->make_bread->add('View');
        $breadcrumb    = $this->make_bread->output();
        $model         = $this->Project_Model->findOne($id)->row();
        $vendor        = $this->Vendor_Model->findOne($model->vendor_id)->row();
        $user_created  = $this->User_Model->findOne($model->created_by)->row();
        $user_updated  = $this->User_Model->findOne($model->updated_by)->row_array();

        return view('procurement/project/view', [
            'model'        => $model,
            'vendor'       => $vendor,
            'breadcrumb'   => $breadcrumb,
            'user_ceated'  => $user_created,
            'user_updated' => $user_updated
        ]);
    }

    public function edit($id)
    {
        $this->make_bread->add('Index', 'procurement/project/index', TRUE);
        $this->make_bread->add('Change Vendor');
        $breadcrumb = $this->make_bread->output();
        $vendor     = $this->Vendor_Model->vendor()->result();
        $model      = $this->Project_Model->findOne($id)->row();

        return view('procurement/project/edit', [
            'vendors'      => $vendor,
            'model'        => $model,
            'breadcrumb'   => $breadcrumb
        ]);
    }

    public function update()
    {
        $this->form_validation->set_rules('vendor_id', 'Vendor Name', 'required');
        $model = $this->Project_Model->findOne($this->input->post('id'))->row();
        if ($this->form_validation->run() == FALSE) {
            $this->make_bread->add('Index', 'procurement/project/index', TRUE);
            $this->make_bread->add('Change Vendor');
            $breadcrumb = $this->make_bread->output();
            $vendor     = $this->Vendor_Model->vendor()->result();
            return view('procurement/project/edit', [
                'vendors'      => $vendor,
                'model'        => $model,
                'breadcrumb'   => $breadcrumb
            ]);
        }
        else {
            $condition = $this->Document_Model->changeVendor($this->input->post('id'), $model->vendor_id, ['status_vendor' => 'change']);
            if($condition == TRUE){ //chnage in document
                $update = [
                    'vendor_id'  => $this->input->post('vendor_id'),
                    'updated_by' => $this->ion_auth->user()->row()->id,
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status'     => 'COM_SITAC'
                ];
                $this->db->trans_start();
                $this->Project_Model->update($this->input->post('id'), $update); //change in project
                $this->VendorProject_Model->save(['project_id' => $this->input->post('id'),
                                                  'vendor_id'  => $this->input->post('vendor_id'),
                                                  'status'     => 'Change',
                                                  'created_at' => date('Y-m-d H:i:s')]); //insert to history
                $this->db->trans_complete();
                if ($this->db->trans_status() === FALSE) {
                    $this->db->trans_rollback();
                    //return 0;
                    $this->session->set_flashdata('success', 'Something Wrong');
                    redirect("procurement/project/index", 'refresh');
                }
                $this->session->set_flashdata('success', 'Data Edited');
                redirect("procurement/project/index", 'refresh');
            }
        }

    }



}
