<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CandidateDocument_Model extends CI_Model
{
	protected $table = 'document_candidate';

	public function findOne($id)
	{
		return $this->db->get_where($this->table, array('id' => $id));
	}

    public function save($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($id, $update)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $update);
    }
}
