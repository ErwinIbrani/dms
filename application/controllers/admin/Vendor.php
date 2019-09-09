<?php

class Vendor extends CI_Controller
{

    public function __Construct()
    {
        parent ::__construct();
        $this->load->model(['Vendor_Model', 'GroupVendor_Model', 'Region_Model', 'Province_Model', 'City_Model', 'User_Model']);
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
        $allcount             = $this->Vendor_Model->getrecordCount($search_text);
        $records              = $this->Vendor_Model->getData($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'admin/vendor/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;

        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('admin/vendor/index', [
            'pagination' => $pagination,
            'vendors'    => $records,
            'search'     => $search_text,
            'breadcrumb' => $breadcrumb,
          ]);
      }

      public function create()
      {
          $this->make_bread->add('Index', 'admin/vendor/index', TRUE);
          $this->make_bread->add('Create');
          $breadcrumb = $this->make_bread->output();
          $groupvendors = $this->GroupVendor_Model->groupvendor()->result();
          $regions      = $this->Region_Model->region()->result();
          $provinces    = $this->Province_Model->province()->result();
          $cities       = $this->City_Model->city()->result();

          return view('admin/vendor/create', [
                      'groupvendors' => $groupvendors,
                      'regions'      => $regions,
                      'provinces'    => $provinces,
                      'cities'       => $cities,
                      'breadcrumb'   =>  $breadcrumb
          ]);
      }


    public function store()
    {
        $this->form_validation->set_rules('group_vendor_id', 'Group Vendor', 'required');
        $this->form_validation->set_rules('name', 'Vendor Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('region_id', 'Region Name', 'required');
        $this->form_validation->set_rules('province_id', 'Province Name', 'required');
        $this->form_validation->set_rules('city_id', 'City Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->make_bread->add('Index', 'admin/vendor/index', TRUE);
            $this->make_bread->add('Create');
            $breadcrumb = $this->make_bread->output();
            $groupvendors = $this->GroupVendor_Model->groupvendor()->result();
            $regions      = $this->Region_Model->region()->result();
            $provinces    = $this->Province_Model->province()->result();
            $cities       = $this->City_Model->city()->result();
            return view('admin/vendor/create', [
                'groupvendors' => $groupvendors,
                'regions'      => $regions,
                'provinces'    => $provinces,
                'cities'       => $cities,
                'breadcrumb'   =>  $breadcrumb
            ]);
        }
        else {
            $data = [
                'group_vendor_id' => $this->input->post('group_vendor_id'),
                'name'            => $this->input->post('name'),
                'email'           => $this->input->post('email'),
                'phone'           => $this->input->post('phone'),
                'region_id'       => $this->input->post('region_id'),
                'province_id'     => $this->input->post('province_id'),
                'city_id'         => $this->input->post('city_id'),
                'address'         => $this->input->post('address'),
                'created_by'      => $this->ion_auth->user()->row()->id,
                'created_at'      => date('Y-m-d H:i:s')
            ];
            $this->Vendor_Model->save($data);
            $this->session->set_flashdata('success', 'Data Inserted');
            redirect("admin/vendor/index", 'refresh');
        }
    }

    public function edit($id)
    {
        $this->make_bread->add('Index', 'admin/vendor/index', TRUE);
        $this->make_bread->add('Update');
        $breadcrumb   = $this->make_bread->output();
        $model        = $this->Vendor_Model->findOne($id)->row();
        $groupvendors = $this->GroupVendor_Model->groupvendor()->result();
        $regions      = $this->Region_Model->region()->result();
        $provinces    = $this->Province_Model->province()->result();
        $cities       = $this->City_Model->city()->result();


        return view('admin/vendor/edit', [
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
        $this->form_validation->set_rules('group_vendor_id', 'Group Vendor', 'required');
        $this->form_validation->set_rules('name', 'Vendor Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('region_id', 'Region Name', 'required');
        $this->form_validation->set_rules('province_id', 'Province Name', 'required');
        $this->form_validation->set_rules('city_id', 'City Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('warning', 'Please Update Correctly');
            redirect_back();
        }
        else {
            $update = [
                'group_vendor_id' => $this->input->post('group_vendor_id'),
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
            $this->Vendor_Model->update($this->input->post('id'), $update);
            $this->session->set_flashdata('success', 'Data Edited');
            redirect("admin/vendor/index", 'refresh');
        }
    }

    public function view($id)
    {
        $this->make_bread->add('Index', 'admin/vendor/index', TRUE);
        $this->make_bread->add('View');
        $breadcrumb   = $this->make_bread->output();
        $model        = $this->Vendor_Model->findOne($id)->row();
        $group        = $this->GroupVendor_Model->findOne($model->group_vendor_id)->row();
        $region       = $this->Region_Model->findOne($model->region_id)->row();
        $province     = $this->Province_Model->findOne($model->province_id)->row();
        $city         = $this->City_Model->findOne($model->city_id)->row();
        $created      = $this->User_Model->findOne($model->created_by)->row_array();
        $updated     = $this->User_Model->findOne($model->updated_by)->row_array();

        return view('admin/vendor/view', [
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
        $this->Vendor_Model->update($id, $update);
        $this->session->set_flashdata('success', 'Data Deleted');
        redirect("admin/vendor/index", 'refresh');
    }

}