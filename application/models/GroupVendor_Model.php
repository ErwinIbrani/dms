<?php

class GroupVendor_Model extends CI_Model
{
    protected $table       = "group_vendor";
    protected $primaryKey  = 'id';

    public function groupvendor()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('group_vendor.deleted_at IS NULL', null, false);
        return $this->db->get();
    }


    public function getDatas($rowno,$rowperpage,$search="")
    {

        $this->db->select('created.id as created_id, created.username as created_username ,created.email as created_email,
                           updated.id as updated_id, updated.username as updated_username ,updated.email as updated_email,
                            group_vendor.id, group_vendor.group_name');
        $this->db->from($this->table);
        $this->db->join('users as created','created.id = group_vendor.created_by','inner'); //inner //Right
        $this->db->join('users as updated','updated.id = group_vendor.updated_by','Left');
        $this->db->where('group_vendor.deleted_at IS NULL', null, false);
        if($search != ''){
            $this->db->like('group_vendor.group_name', $search);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result();

    }

    public function getrecordCount($search = '')
    {
        $this->db->select('count(*) as allcount');
        $this->db->from($this->table);
        $this->db->join('users as created','created.id = group_vendor.created_by','inner'); //inner //Right
        $this->db->join('users as updated','updated.id = group_vendor.updated_by','Left');
        $this->db->where('group_vendor.deleted_at IS NULL', null, false);
        if($search != ''){
            $this->db->like('group_vendor.group_name', $search);
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }

    public function save($data){
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
}