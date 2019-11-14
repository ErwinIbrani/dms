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

    public function UserGroup()
    {
        $this->db->select('users.id,
                           users.email,
                           groups.id as group_id,
                           groups.name');
        $this->db->from('users_groups');
        $this->db->join('users','users_groups.user_id   = users.id','inner');
        $this->db->join('groups','users_groups.group_id = groups.id','inner');
        $this->db->where(['users.type' => 'internal']);
        return $this->db->get();
    }





}
