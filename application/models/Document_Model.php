<?php

class Document_Model extends CI_Model
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

    public function getData($rowno,$rowperpage,$search="")
    {
        $this->db->select('p.id, p.wbs_id, p.iro_number, p.site_id_ibs, v.name');
        $this->db->from('project p');
        $this->db->join('vendor v', 'p.vendor_id = v.id', 'inner');
        if($search != ''){
            $this->db->like('v.name', $search);
            $this->db->or_like('p.wbs_id', $search);
            $this->db->or_like('p.iro_number', $search);
            $this->db->or_like('p.site_id_ibs', $search);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result();
    }

    public function getrecordCount($search = '')
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('project');
        $this->db->join('vendor', 'project.vendor_id = vendor.id', 'inner');
        $this->db->where('project.status = 1');
        if($search != ''){
            $this->db->like('vendor.name', $search);
            $this->db->or_like('project.wbs_id', $search);
            $this->db->or_like('project.iro_number', $search);
            $this->db->or_like('project.site_id_ibs', $search);
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
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


}