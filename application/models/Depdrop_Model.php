<?php

class Depdrop_Model extends CI_Model
{
    public function get_region()
    {
        $this->db->select('*');
        $this->db->from('region');
        $this->db->where('region.deleted_at IS NULL', null, false);
        return $this->db->get();
    }

    public function get_province($region_id)
    {
       return $this->db->get_where('province', ['region_id' => $region_id]);
    }

    public function get_city($province_id)
    {
        return $this->db->get_where('city', ['province_id' => $province_id]);
    }


}