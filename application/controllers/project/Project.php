<?php

class Project extends CI_Controller
{

    public function __Construct()
    {
        parent::__construct();
        $this->load->model(['Project_Model', 'Vendor_Model', 'User_Model', 'Pic_Model', 'ComSitac_Model']);
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

        return view('project/project/index', [
            'pagination' => $pagination,
            'projects'   => $records,
            'search'     => $search_text,
            'breadcrumb' => $breadcrumb,
        ]);
    }



    public function document($id)
    {
        $this->make_bread->add('Index', 'project/project/index', TRUE);
        $this->make_bread->add('Document');
        $breadcrumb    = $this->make_bread->output();
        $model         = $this->Project_Model->findOne($id)->row();
        $vendor        = $this->Vendor_Model->findOne($model->vendor_id)->row();
        $user_created  = $this->User_Model->findOne($model->created_by)->row();
        $user_updated  = $this->User_Model->findOne($model->updated_by)->row_array();
        $pics          = $this->Pic_Model->findByProject($model->id)->result_array();
        $kom_sitac     = $this->ComSitac_Model->status($model->id)->row();

        return view('project/project/view', [
            'model'        => $model,
            'vendor'       => $vendor,
            'breadcrumb'   => $breadcrumb,
            'user_ceated'  => $user_created,
            'user_updated' => $user_updated,
            'pics'         => $pics,
            'kom_sitac'    => $kom_sitac
        ]);
    }

}