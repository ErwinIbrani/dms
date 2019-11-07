<?php

class Document_Model extends CI_Model
{
    protected $table       = 'document_project';
    protected $primaryKey  = 'id';


    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function changeVendor($project_id, $vendor_id, $update)
    {
        $this->db->where(['project_id' => $project_id]);
        $this->db->where(['vendor_id' =>  $vendor_id]);
        return $this->db->update($this->table, $update);
    }

	public function getSpecificDocument($project_id, $doc_name)
	{
		$this->db->from($this->table)
			->where('project_id', $project_id)
			->where('name', $doc_name);

		return $this->db->get();
	}

	public function getCountSpecificDocument($project_id, $doc_name)
	{
		$this->db->from($this->table)
			->where('project_id', $project_id)
			->where('type', $doc_name);

		return $this->db->get();
	}




}
