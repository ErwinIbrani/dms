<?php

class KomSitac_Model extends CI_Model
{
    protected $table       = 'document_project';
    protected $primaryKey  = 'id';

    public function document()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('document_project.deleted_at IS NULL', null, false);
        return $this->db->get();
    }

    public function duplicate($wbs_id)
    {
        $this->db->select('wbs_id');
        $this->db->from($this->table);
        $this->db->where(['wbs_id' => $wbs_id]);
        return $this->db->get();
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
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


}