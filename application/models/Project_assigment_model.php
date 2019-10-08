<?php

class Project_assigment_model extends CI_Model
{
	private $table = 'project_assigment';

	public function insert($data) {
		return $this->db->insert($this->table, $data);
	}


	public function multipleInsert()
	{
		
	}
    public function findOne($id)
    {
        return $this->db->get_where($this->table, ['id' => $id]);
    }

    public function findByProject($project_id)
    {
        return $this->db->get_where($this->table, ['project_id' => $project_id]);
    }

    public function findByVendor($vendor_id)
    {
        return $this->db->get_where($this->table, ['vendor_id' => $vendor_id]);
    }

}
