<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserGroup extends CI_Controller 
{

	/**
	 * UserGroup constructor.
	 */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserGroup_Model');
    }

	/**
	 * Get all list of data.
	 * @return bool
	 */
    public function index($page=0)
    {
        $this->title = "User Groups";


		$rowPerPage = 10;
		if($page != 0){
			$page = ($page-1) * $rowPerPage;
		}

		$data = $this->UserGroup_Model->getAllList($rowPerPage, $page);

		$config['base_url'] = base_url().'admin/usergroup/index';
		$config['total_rows'] = $this->UserGroup_Model->getCount();
		$config['per_page'] = $rowPerPage;
		// Initialize
		$this->pagination->initialize($config);
		$pagination = $this->pagination->create_links();

        return view('admin.user.group.index', array(
            'title' => $this->title,
			'data' => $data,
			'pagination' => $pagination
		));
    }

    protected function validator($isNew) {
		if($isNew) {
			$this->form_validation->set_rules('name', 'Group Name', 'required|is_unique[groups.name]',
				array('is_unique' => 'This %s already exists.'));
		} else {
			$this->form_validation->set_rules('name', 'Group Name', 'required');
		}
		$this->form_validation->set_rules('description', 'Description', 'required');
	}

	/**
	 * Store data to database.
	 *
	 * @return bool
	 */
    public function store()
	{
		$this->validator(true);

		if($this->form_validation->run()) {
			$this->UserGroup_Model->storeData($this->input->post());
			$this->session->set_flashdata('success', 'Data Inserted');
			return redirect("admin/user/groups", 'refresh');
		} else {
			return $this->index();
		}
	}

	/**
	 * Edit data.
	 *
	 * @param $id
	 * @return bool|void
	 */
	public function edit($id)
	{
		$this->validator(false);

		if($this->form_validation->run()) {
			$this->UserGroup_Model->updateData($this->input->post(), $id);
			$this->session->set_flashdata('success', 'Data updated');
			return redirect("admin/user/groups", 'refresh');
		} else {
			return $this->index();
		}
	}

	/**
	 * Delete record.
	 *
	 * @param $id
	 */
	public function delete($id)
	{
		$this->UserGroup_Model->deleteData($id);
		return redirect("admin/user/groups");
	}
}
