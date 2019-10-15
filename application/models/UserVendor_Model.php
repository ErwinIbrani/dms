<?php

class UserVendor_Model extends CI_Model
{
    protected $table       = 'user_vendor';
    protected $primaryKey  = 'id';

    public function uservendor()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('user_vendor.deleted_at IS NULL', null, false);
        return $this->db->get();
    }

    public function getData($rowno,$rowperpage,$search="")
    {
        $this->db->select('user_vendor.id as vendor_id,
                           user_vendor.vendor_id as vendor_id,
                           user_vendor.name as vendor_name,
                           user_vendor.email as vendor_email,
                           user_vendor.phone as vendor_phone,
                           user_vendor.address as vendor_address,
                           user_vendor.region_id as vendor_region_id,
                           user_vendor.province_id as vendor_province_id,
                           user_vendor.city_id as vendor_city_id,
                           user_vendor.created_by as vendor_created_by,
                           user_vendor.updated_by as vendor_updated_by,
                           vendor.name as group_name,
                           region.name as region_name,
                           region.code as region_code,
                           region.char as region_char,
                           province.name as province_name,
                           province.code as province_code,
                           city.name as city_name,
                           city.code as city_code,
                           city.bsni as city_bsni');
        $this->db->from($this->table);
        $this->db->join('vendor','vendor.id = user_vendor.vendor_id','inner');
        $this->db->join('region','region.id = user_vendor.region_id','inner');
        $this->db->join('province','province.id = user_vendor.province_id','inner');
        $this->db->join('city','city.id = user_vendor.city_id','inner');
        $this->db->join('users as created','created.id = vendor.created_by','inner'); //inner //Right
        $this->db->join('users as updated','updated.id = vendor.updated_by','Left');
        $this->db->where('user_vendor.deleted_at IS NULL', null, false);
        if($search != ''){
            $this->db->like('user_vendor.name', $search);
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
        $this->db->join('vendor','vendor.id = user_vendor.vendor_id','inner');
        $this->db->join('region','region.id = user_vendor.region_id','inner');
        $this->db->join('province','province.id = user_vendor.province_id','inner');
        $this->db->join('city','city.id = user_vendor.city_id','inner');
        $this->db->join('users as created','created.id = vendor.created_by','inner'); //inner //Right
        $this->db->join('users as updated','updated.id = vendor.updated_by','Left');
        $this->db->where('user_vendor.deleted_at IS NULL', null, false);
        if($search != ''){
            $this->db->like('user_vendor.name', $search);
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

    public function getPIC($id)
    {
        return $this->db->get_where($this->table, [$this->primaryKey => $id, 'level'=> 'PIC']);
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
