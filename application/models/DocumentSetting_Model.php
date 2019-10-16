<?php

class DocumentSetting_Model extends CI_Model
{
    protected $table       = 'document_setting';
    protected $primaryKey  = 'id';

    public function documentsetting()
    {
        $this->db->select('document_setting.id,
                           document_setting.document_name, 
                           document_setting.document_type,
                           groups.name as group_name,
                           groups.id as group_id');
        $this->db->from($this->table);
        $this->db->join('groups','document_setting.group_id = groups.id','inner'); //inner //Right
        $this->db->where('document_setting.deleted_at IS NULL', null, false);
        return $this->db->get();
    }

    public function getData($rowno,$rowperpage,$search="")
    {
        $this->db->select('document_setting.id,
                           document_setting.document_name, 
                           document_setting.document_type,
                           groups.name as group_name,
                           groups.id as group_id');
        $this->db->from($this->table);
        $this->db->join('groups','document_setting.group_id = groups.id','inner'); //inner //Right
        $this->db->where('document_setting.deleted_at IS NULL', null, false);
        if($search != ''){
            $this->db->like('document_setting.document_name', $search);
            $this->db->or_like('groups.name', $search);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result();
    }

    public function getrecordCount($search = '')
    {
        $this->db->select('count(*) as allcount');
        $this->db->from($this->table);
        $this->db->join('groups','document_setting.group_id = groups.id','inner'); //inner //Right
        $this->db->where('document_setting.deleted_at IS NULL', null, false);
        if($search != ''){
            $this->db->like('document_setting.document_name', $search);
            $this->db->or_like('groups.name', $search);
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }

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

    public function findInGroupID($group_id)
    {
        $this->db->where_in('group_id', $group_id);
        return $this->db->get($this->table);
    }

}