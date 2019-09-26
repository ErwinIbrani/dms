<?php

class Uservendor extends CI_Controller
{

    public function __Construct()
    {
        parent ::__construct();
        $this->load->model(['Vendor_Model', 'UserVendor_Model', 'Region_Model', 'Province_Model', 'City_Model', 'User_Model']);
        $this->load->library(['ion_auth']);
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
        $allcount             = $this->UserVendor_Model->getrecordCount($search_text);
        $records              = $this->UserVendor_Model->getData($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'admin/uservendor/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;

        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('admin/user-vendor/index', [
            'pagination' => $pagination,
            'vendors'    => $records,
            'search'     => $search_text,
            'breadcrumb' => $breadcrumb,
          ]);
      }

      public function create()
      {
          $this->make_bread->add('Index', 'admin/uservendor/index', TRUE);
          $this->make_bread->add('Create');
          $breadcrumb = $this->make_bread->output();
          $groupvendors = $this->Vendor_Model->vendor()->result();
          $regions      = $this->Region_Model->region()->result();
          $provinces    = $this->Province_Model->province()->result();
          $cities       = $this->City_Model->city()->result();

          return view('admin/user-vendor/create', [
                      'groupvendors' => $groupvendors,
                      'regions'      => $regions,
                      'provinces'    => $provinces,
                      'cities'       => $cities,
                      'breadcrumb'   =>  $breadcrumb
          ]);
      }


    public function store()
    {
        $data = [
                 'vendor_id'       => $this->input->post('vendor_id'),
                 'name'            => $this->input->post('name'),
                 'email'           => $this->input->post('email'),
                 'phone'           => $this->input->post('phone'),
                 'region_id'       => $this->input->post('region_id'),
                 'province_id'     => $this->input->post('province_id'),
                 'city_id'         => $this->input->post('city_id'),
                 'address'         => $this->input->post('address'),
                 'level'           => $this->input->post('level'),
                 'created_by'      => $this->ion_auth->user()->row()->id,
                 'created_at'      => date('Y-m-d H:i:s'),
                 'updated_at'      => date('Y-m-d H:i:s')
            ];
            $this->UserVendor_Model->save($data);
            $this->session->set_flashdata('success', 'Data Inserted');
            redirect("admin/uservendor/index", 'refresh');
    }

    public function edit($id)
    {
        $this->make_bread->add('Index', 'admin/uservendor/index', TRUE);
        $this->make_bread->add('Update');
        $breadcrumb   = $this->make_bread->output();
        $model        = $this->UserVendor_Model->findOne($id)->row();
        $groupvendors = $this->Vendor_Model->vendor()->result();
        $regions      = $this->Region_Model->region()->result();
        $provinces    = $this->Province_Model->province()->result();
        $cities       = $this->City_Model->city()->result();

        return view('admin/user-vendor/edit', [
            'groupvendors' => $groupvendors,
            'regions'      => $regions,
            'provinces'    => $provinces,
            'cities'       => $cities,
            'model'        => $model,
            'breadcrumb'  => $breadcrumb
        ]);
    }

    public function update()
    {
           $update = [
                'vendor_id'       => $this->input->post('vendor_id'),
                'name'            => $this->input->post('name'),
                'email'           => $this->input->post('email'),
                'phone'           => $this->input->post('phone'),
                'region_id'       => $this->input->post('region_id'),
                'province_id'     => $this->input->post('province_id'),
                'city_id'         => $this->input->post('city_id'),
                'address'         => $this->input->post('address'),
                'updated_by'      => $this->ion_auth->user()->row()->id,
                'updated_at'      => date('Y-m-d H:i:s')
            ];
            $this->UserVendor_Model->update($this->input->post('id'), $update);
            $this->session->set_flashdata('success', 'Data Edited');
            redirect("admin/uservendor/index", 'refresh');
    }

    public function view($id)
    {
        $this->make_bread->add('Index', 'admin/uservendor/index', TRUE);
        $this->make_bread->add('View');
        $breadcrumb   = $this->make_bread->output();
        $model        = $this->UserVendor_Model->findOne($id)->row();
        $group        = $this->Vendor_Model->findOne($model->vendor_id)->row();
        $region       = $this->Region_Model->findOne($model->region_id)->row();
        $province     = $this->Province_Model->findOne($model->province_id)->row();
        $city         = $this->City_Model->findOne($model->city_id)->row();
        $created      = $this->User_Model->findOne($model->created_by)->row_array();
        $updated      = $this->User_Model->findOne($model->updated_by)->row_array();

        return view('admin/user-vendor/view', [
            'model'    => $model,
            'group'    => $group,
            'region'   => $region,
            'province' => $province,
            'city'     => $city,
            'created'  => $created,
            'updated'  => $updated,
            'breadcrumb' => $breadcrumb
        ]);
    }


    public function destroy($id)
    {
        $update = [
            'deleted_at'  => date('Y-m-d H:i:s')
        ];
        $this->UserVendor_Model->update($id, $update);
        $this->session->set_flashdata('success', 'Data Deleted');
        redirect("admin/vendor/index", 'refresh');
    }

}