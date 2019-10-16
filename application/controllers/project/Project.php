<?php

class Project extends CI_Controller
{

    public function __Construct()
    {
        parent::__construct();
        $this->load->model(['Project_Model', 'Vendor_Model', 'User_Model', 'ComSitac_Model']);
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
        $kom_sitac     = $this->ComSitac_Model->status($model->id)->row_array();

        return view('project/project/view', [
            'model'        => $model,
            'vendor'       => $vendor,
            'breadcrumb'   => $breadcrumb,
            'user_ceated'  => $user_created,
            'user_updated' => $user_updated,
            'kom_sitac'    => $kom_sitac
        ]);
    }

    public function project()
	{
		$projects = $this->Project_Model
			->getAllByStatusAndVendor('project.id,project.wbs_id, project.iro_number, project.site_id_ibs, project.site_name, 
			project.status, project_assigment.assignment_type', 'New', 1, false);

		return view('vendor.project.new_project', array(
			'projects' => $projects->result(),
			'vendor_id' => 1
		));
	}

}
