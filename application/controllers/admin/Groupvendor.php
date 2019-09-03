<?php

class Groupvendor extends CI_Controller
{

    public function __Construct()
    {
        parent ::__construct();
        $this->load->model('GroupVendor_Model');
        $this->load->library(['ion_auth', 'form_validation', 'form_validation', 'pagination']);
        $this->lang->load('auth');
        authentication($this->ion_auth->logged_in());

    }

    public function index($rowno=0)
    {
        $search_text = "";
        if($this->input->post('submit') != NULL ){
            $search_text = $this->input->post('search');
            $this->session->set_userdata([ "search" => $search_text]);
        }else{
            if($this->session->userdata('search') != NULL){
                $search_text = $this->session->userdata('search');
            }
        }
        $rowperpage = 4;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        }
        $allcount           = $this->GroupVendor_Model->getrecordCount($search_text);
        $records            = $this->GroupVendor_Model->getDatas($rowno, $rowperpage, $search_text);
        $config['base_url'] = base_url().'admin/groupvendor/index';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;
        //config for bootstrap pagination class integration
        // Bootstrap 4, work very fine.
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = ['class' => 'page-link'];
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        // Initialize
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();
        return view('admin/group-vendor/index', [
            'pagination' => $pagination,
            'groups'    => $records,
            'search'    => $search_text,
        ]);
    }

    public function create()
    {
        return view('admin/group-vendor/create');
    }

    public  function store()
    {
      $this->form_validation->set_rules('group_name', 'Group Name', 'required');
      if ($this->form_validation->run() == FALSE) {
            return view('admin/group-vendor/create');
        }
      else {
            $data = [
                'group_name'   => $this->input->post('group_name'),
                'created_by'   => $this->ion_auth->user()->row()->id,
            ];
            $this->GroupVendor_Model->save($data);
            $this->session->set_flashdata('success', 'Data Inserted');
            redirect("admin/groupvendor/create", 'refresh');
         }
    }

    public function edit($id)
    {

    }
    

}