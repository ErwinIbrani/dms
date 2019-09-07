<?php

class User_Model extends CI_Model {
    
    protected $table = 'users';
    protected $primaryKey = 'id';

    public function findOne($id)
    {
        return $this->db->get_where($this->table, [$this->primaryKey => $id]);
    }


}
