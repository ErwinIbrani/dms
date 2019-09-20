<?php

class Group_Model extends CI_Model
{
    protected $table = 'groups';
    protected $primaryKey = 'id';

    public function findByPIC()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(['name' => 'PIC Vendor']);
        return $this->db->get();
    }

    public function findByRoleIbs()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('name !=', 'PIC Vendor');
        return $this->db->get();
    }
}