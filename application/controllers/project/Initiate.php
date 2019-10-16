<?php

class Initiate extends Project_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->model(array('Project_Model', 'Vendor_Model', 'User_Model','DocumentSetting_Model', 'DocumentApprovalSetting_Model'));
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
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        }
        $allcount             = $this->DocumentApprovalSetting_Model->getrecordCount($search_text);
        $records              = $this->DocumentApprovalSetting_Model->getData($rowno, $rowperpage, $search_text);
        $config['base_url']   = base_url().'project/initiate/index';
        $config['total_rows'] = $allcount;
        $config['per_page']   = $rowperpage;
        // Initialize
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();

        return view('project.initiate.index', [
            'pagination'       => $pagination,
            'document_settings'=> $records,
            'search'           => $search_text,
            'breadcrumb'       => $breadcrumb,
        ]);
    }

	public function create()
	{
        $this->make_bread->add('Index', 'project/initiate/index', TRUE);
        $this->make_bread->add('Create');
        $breadcrumb    = $this->make_bread->output();
        $projects      = $this->Project_Model->project()->result();
        $users_pic     = $this->User_Model->UserIBS()->result();
        $users_groups  = $this->User_Model->UserGroup()->result();
        $document_setting = $this->DocumentSetting_Model->documentsetting()->result();
		return view('project.initiate.create', array(
           'projects'          => $projects,
           'users_pic'         => $users_pic,
           'users_groups'      => $users_groups,
           'document_settings' => $document_setting,
           'breadcrumb'        => $breadcrumb
		));

	}

	public function store()
    {
        $data  = [];
        $count = count($this->input->post('layer'));
        for($i=0; $i<$count; $i++) {
            $data[$i] = [
                'project_id'          => $this->input->post('project_id'),
                'pic_id'              => $this->input->post('pic_id'),
                'document_setting_id' => $this->input->post('document_setting_id')[$i],
                'approval_id'         => $this->input->post('approval_id')[$i],
                'layer'               => $this->input->post('layer')[$i],
                'created_at'          => date('Y-m-d H:i:s'),
                'updated_at'          => date('Y-m-d H:i:s'),
            ];
        }
        $this->DocumentApprovalSetting_Model->saveMultiple($data);
        $this->session->set_flashdata('success', 'Data Inserted');
        redirect("project/initiate/index", 'refresh');
    }


    public function edit($id)
    {
        $this->make_bread->add('Index', 'project/initiate/index', TRUE);
        $this->make_bread->add('Update');
        $breadcrumb   = $this->make_bread->output();
        $model        = $this->DocumentApprovalSetting_Model->findOne($id)->row();
        $projects   = $this->Project_Model->project()->result();
        $users_pic  = $this->User_Model->UserIBS()->result();

        $document_setting = $this->DocumentSetting_Model->documentsetting()->result();
        return view('project.initiate.edit', [
            'model'            => $model,
            'breadcrumb'       => $breadcrumb,
            'projects'         => $projects,
            'users_pic'        => $users_pic,
            'document_settings' => $document_setting]);
    }

    public function update()
    {
        $update = [
            'project_id'          => $this->input->post('project_id'),
            'pic_id'              => $this->input->post('pic_id'),
            'document_setting_id' => $this->input->post('document_setting_id'),
            'approval_id'         => $this->input->post('approval_id'),
            'layer'               => $this->input->post('layer'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ];
        $this->DocumentApprovalSetting_Model->update($this->input->post('id'), $update);
        $this->session->set_flashdata('success', 'Data Edited');
        redirect("project/initiate/index", 'refresh');
    }

    public function destroy($id)
    {
      $this->DocumentApprovalSetting_Model->delete($id);
      $this->session->set_flashdata('success', 'Data Deleted');
        redirect("project/initiate/index", 'refresh');
    }
}
