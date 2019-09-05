<?php

class Province_Model extends CI_Model
{
    protected $table       = "province";
    protected $primaryKey  = 'id';

    public function province()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('province.deleted_at IS NULL', null, false);
        return $this->db->get();
    }

    public function getData($rowno,$rowperpage,$search="")
    {
        $this->db->select('region.id as region_id,
                           region.name as region_name, 
                           region.code as region_code,
                           region.char as region_char,
                           province.id as province_id,
                           province.name as province_name,
                           province.code as province_code');
        $this->db->from($this->table);
        $this->db->join('region','region.id = province.region_id','inner'); //inner //Right
        $this->db->where('province.deleted_at IS NULL', null, false);
        if($search != ''){
            $this->db->like('province.name', $search);
            $this->db->or_like('province.code', $search);
            $this->db->or_like('region.name', $search);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result();
    }

    public function getrecordCount($search = '')
    {
        $this->db->select('count(*) as allcount');
        $this->db->from($this->table);
        $this->db->join('region','region.id = province.region_id','inner'); //inner //Right//Left
        $this->db->where('province.deleted_at IS NULL', null, false);
        if($search != ''){
            $this->db->like('province.name', $search);
            $this->db->or_like('province.code', $search);
            $this->db->or_like('region.name', $search);
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

    public function getRegion()
    {
        $this->db->select('*');
        $this->db->from('region');
        $this->db->where('region.deleted_at IS NULL', null, false);
        return $this->db->get();
    }



}