<?php

class ComSitac_Model extends CI_Model
{
    protected $table       = 'document_project';
    protected $primaryKey  = 'id';


    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function findOne($id)
    {
        return $this->db->get_where($this->table, [$this->primaryKey => $id, 'name' => 'COM_SITAC']);
    }

    public function status($project_id)
    {
        return $this->db->get_where($this->table, ['project_id' => $project_id, 'name' => 'COM_SITAC']);
    }

    public function update($id, $update)
    {
        $this->db->where($this->primaryKey, $id);
        $this->db->update($this->table, $update);
    }


}