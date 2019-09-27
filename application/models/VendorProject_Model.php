<?php

class VendorProject_Model extends CI_Model
{
    protected $table       = 'vendor_project';
    protected $primaryKey  = 'id';

    public function getData($rowno,$rowperpage,$search="")
    {
        $this->db->select('vendor_project.id as vendor_project_id,
                           vendor_project.status as vendor_project_status,
                           vendor_project.created_at as vendor_project_created_at,
                           project.wbs_id,
                           project.iro_number,
                           vendor.group_name');
        $this->db->from($this->table);
        $this->db->join('project','vendor_project.project_id = project.id','inner');
        $this->db->join('vendor', 'vendor_project.vendor_id = vendor.id','inner');
        if($search != ''){
            $this->db->like('vendor_project.status', $search);
            $this->db->or_like('project.wbs_id', $search);
            $this->db->or_like('project.iro_number', $search);
            $this->db->or_like('vendor.group_name', $search);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result();
    }

    public function getrecordCount($search = '')
    {
        $this->db->select('count(*) as allcount');
        $this->db->from($this->table);
        $this->db->join('project','vendor_project.project_id = project.id','inner');
        $this->db->join('vendor', 'vendor_project.vendor_id = vendor.id','inner');
        if($search != ''){
            $this->db->like('vendor_project.status', $search);
            $this->db->or_like('project.wbs_id', $search);
            $this->db->or_like('project.iro_number', $search);
            $this->db->or_like('vendor.group_name', $search);
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

}