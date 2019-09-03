<?php

class GroupVendor_Model extends CI_Model
{
    protected $table       = "group_vendor";
    protected $primaryKey  = 'id';
    //const SOFT_DELETED     = 'is_deleted';
    //protected $softDeletedFalseValue = '0';
    //protected $softDeletedTrueValue = '1';
   // const CREATED_AT       = 'created_at';
    //const UPDATED_AT       = 'updated_at';

  /*  public function rules()
    {
        $this->lang->load('error_messages', 'en-US');
        return [
                [
                    'field' => 'group_name',
                    'rules' => 'required|max_length[255]',
                ],
          ];
    }*/

    public function getDatas($rowno,$rowperpage,$search="")
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('is_deleted = 1');
        if($search != ''){
            $this->db->like('group_name', $search);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result();
    }

    public function getrecordCount($search = '')
    {
        $this->db->select('count(*) as allcount');
        $this->db->from($this->table);
        $this->db->where('is_deleted = 1');
        if($search != ''){
            $this->db->like('group_name', $search);
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }

    public function save($data){
        $this->db->insert($this->table, $data);
        //return $this->db->insert_id();
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