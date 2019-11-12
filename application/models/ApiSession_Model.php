<?php

class ApiSession_Model extends CI_Model
{
    protected $table       = "api_session";
    protected $primaryKey  = 'session_id';

    public function save($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function findOne($id)
    {
        return $this->db->get_where($this->table, [$this->primaryKey => $id])->first_row();
    }

    public function delete($id)
    {
        $this->db->where($this->primaryKey, $id);
        $this->db->delete($this->table);
    }

    public function checkSessionActive($email)
    {
        // TODO : perlu ditambah periode (from created_at) sebagai expired
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(['email' => $email]);
        return $this->db->get()->first_row();
    }
}