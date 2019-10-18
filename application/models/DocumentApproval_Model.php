<?php

class DocumentApproval_Model extends CI_Model
{
    protected $table       = 'document_approval';
    protected $primaryKey  = 'id';

    public function save($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function findOne($id)
    {
        return $this->db->get_where($this->table, [$this->primaryKey => $id]);
    }

    public function update($id, $update)
    {
        $this->db->where($this->primaryKey, $id);
        $this->db->update($this->table, $update);
    }

    public function delete($id)
    {
        $this->db->where($this->primaryKey, $id);
        $this->db->delete($this->table);
    }

    public function saveMultiple($data)
    {
        return $this->db->insert_batch($this->table, $data);
    }

}