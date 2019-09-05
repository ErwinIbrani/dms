<?php


class Region_Model extends CI_Model
{
    protected $table       = "region";
    protected $primaryKey  = 'id';

    public function region()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('region.deleted_at IS NULL', null, false);
        return $this->db->get();
    }

    public function getData($rowno,$rowperpage,$search="")
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('region.deleted_at IS NULL', null, false);
        if($search != ''){
            $this->db->like('name', $search);
            $this->db->or_like('code', $search);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result();
    }

    public function getrecordCount($search = '')
    {
        $this->db->select('count(*) as allcount');
        $this->db->from($this->table);
        $this->db->where('region.deleted_at IS NULL', null, false);
        if($search != ''){
            $this->db->like('name', $search);
            $this->db->or_like('code', $search);
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