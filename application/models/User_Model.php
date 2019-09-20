<?php

class User_Model extends CI_Model {
    
    protected $table = 'users';
    protected $primaryKey = 'id';

    public function user()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get();
    }

    public function findOne($id)
    {
        return $this->db->get_where($this->table, [$this->primaryKey => $id]);
    }

    public function findByEmail($email)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(['email' => $email]);
        return $this->db->get()->result();
    }

    public function findByUsername($username)
    {
        return $this->db->get_where($this->table, ['username' => $username]);
    }

    public function vendorPIC()
    {
        return $this->db->get_where($this->table, ['type' => 'Vendor']);
    }

    public function UserIBS()
    {
        return $this->db->get_where($this->table, ['type' => 'internal']);
    }



}
