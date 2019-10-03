<?php

class Project_Model extends CI_Model
{
    protected $table       = 'project';
    protected $primaryKey  = 'id';

    public function project()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get();
    }

    public function getData($rowno,$rowperpage,$search="")
    {
        $this->db->select('*');
        $this->db->from('project');
        if($search != ''){
            $this->db->or_like('wbs_id', $search);
            $this->db->or_like('iro_number', $search);
            $this->db->or_like('status', $search);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result();
    }

    public function getrecordCount($search = '')
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('project');
        if($search != ''){
            $this->db->or_like('wbs_id', $search);
            $this->db->or_like('iro_number', $search);
            $this->db->or_like('site_id_ibs', $search);
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
        return $this->db->insert_id();
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

    public function getAll()
	{
		return $this->db->get($this->table);
	}


}
