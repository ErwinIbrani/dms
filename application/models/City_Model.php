<?php

class City_Model extends CI_Model
{
    protected $table       = 'city';
    protected $primaryKey  = 'id';

    public function city()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('city.deleted_at IS NULL', null, false);
        return $this->db->get();
    }

    public function getData($rowno,$rowperpage,$search="")
    {
        $this->db->select('city.id as city_id,
                           city.code as city_code,
                           city.bsni as city_bsni,
                           city.name as city_name,
                           city.province_id as city_province_id,
                           province.id as province_id,
                           province.name as province_name,
                           province.code as province_code');
        $this->db->from($this->table);
        $this->db->join('province','province.id = city.province_id','inner'); //inner //Right
        $this->db->where('city.deleted_at IS NULL', null, false);
        if($search != ''){
            $this->db->like('province.name', $search);
            $this->db->or_like('city.name', $search);
            $this->db->or_like('city.code', $search);
            $this->db->or_like('city.bsni', $search);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result();
    }

    public function getrecordCount($search = '')
    {
        $this->db->select('count(*) as allcount');
        $this->db->from($this->table);
        $this->db->join('province','province.id = city.province_id','inner'); //inner //Right//Left
        $this->db->where('city.deleted_at IS NULL', null, false);
        if($search != ''){
            $this->db->like('province.name', $search);
            $this->db->or_like('city.name', $search);
            $this->db->or_like('city.code', $search);
            $this->db->or_like('city.bsni', $search);
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

    public function getProvince()
    {
        $this->db->select('*');
        $this->db->from('province');
        $this->db->where('province.deleted_at IS NULL', null, false);
        return $this->db->get();
    }

}