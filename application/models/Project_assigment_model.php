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
}
