<?php

class Tmplanning_Model extends CI_Model
{
    protected $table       = 'tm_planning';
    protected $primaryKey  = 'id';

    public function getData()
    {
        $dbWBS = $this->load->database('wbsgen', TRUE);
        $dbWBS->select('tm_planning.id as tm_planning_id,
                            tm_planning.project as tm_planning_project,
                            tm_planning.work_group as tm_planning_work_group,
                            tm_planning.owner_project as tm_planning_owner_project,
                            tm_planning.project_type as tm_planning_project_type,
                            tm_planning.pic_project as tm_planning_pic_project,
                            tm_planning.tenant as tm_planning_tenant,
                            tm_planning.iro_number as tm_planning_iro_number,
                            tm_planning.sa_type as tm_planning_sa_type,
                            tm_planning.start_date as tm_planning_start_date,
                            tm_planning.finish_date as tm_planning_finish_date,
                            tm_planning.is_status as tm_planning_is_status,
                            tm_planning.created_by as tm_planning_created_by,
                            tm_planning.updated_by as tm_planning_updated_by,
                            tm_planning.deleted_by as tm_planning_deleted_by,
                            tm_planning.company_code as tm_planning_company_code,
                            tm_planning.spk_number as tm_planning_spk_number,
                            td_planning_detail.id  as td_planning_detail_id,
                            td_planning_detail.site_id_ibs as td_planning_detail_site_id_ibs,
                            td_planning_detail.site_id_tenant as td_planning_detail_site_id_tenant,
                            td_planning_detail.site_name as td_planning_detail_site_name,
                            td_planning_detail.site_type as td_planning_detail_site_type,
                            td_planning_detail.tower_height as td_planning_detail_tower_hight,
                            td_planning_detail.building_height as td_planning_detail_building_height,
                            td_planning_detail.region as td_planning_detail_region,
                            td_planning_detail.province_code as td_planning_detail_province_code, 
                            td_planning_detail.city_code as td_planning_detail_city_code,
                            td_planning_detail.address as td_planning_detail_address,
                            td_planning_detail.longitude as td_planning_detail_longitude,
                            td_planning_detail.latitude as td_planning_detail_latitude,
                            td_planning_detail.site_status as td_planning_detail_site_status,
                            td_planning_detail.wbs_id as td_planning_detail_wbs_id');
        $dbWBS->from($this->table);
        $dbWBS->join('td_planning_detail','td_planning_detail.planning_id = tm_planning.id','inner');
        $dbWBS->where(['tm_planning.is_status' => 'Released']);
        $dbWBS->where('tm_planning.deleted_at IS NULL', null, false);
        return $dbWBS->get();
    }

    public function findByWBS($wbs_id)
    {
        $dbWBS = $this->load->database('wbsgen', TRUE);
        $dbWBS->select('tm_planning.id as tm_planning_id,
                            tm_planning.project as tm_planning_project,
                            tm_planning.work_group as tm_planning_work_group,
                            tm_planning.owner_project as tm_planning_owner_project,
                            tm_planning.project_type as tm_planning_project_type,
                            tm_planning.pic_project as tm_planning_pic_project,
                            tm_planning.tenant as tm_planning_tenant,
                            tm_planning.iro_number as tm_planning_iro_number,
                            tm_planning.sa_type as tm_planning_sa_type,
                            tm_planning.start_date as tm_planning_start_date,
                            tm_planning.finish_date as tm_planning_finish_date,
                            tm_planning.is_status as tm_planning_is_status,
                            tm_planning.created_by as tm_planning_created_by,
                            tm_planning.updated_by as tm_planning_updated_by,
                            tm_planning.deleted_by as tm_planning_deleted_by,
                            tm_planning.company_code as tm_planning_company_code,
                            tm_planning.spk_number as tm_planning_spk_number,
                            td_planning_detail.id  as td_planning_detail_id,
                            td_planning_detail.site_id_ibs as td_planning_detail_site_id_ibs,
                            td_planning_detail.site_id_tenant as td_planning_detail_site_id_tenant,
                            td_planning_detail.site_name as td_planning_detail_site_name,
                            td_planning_detail.site_type as td_planning_detail_site_type,
                            td_planning_detail.tower_height as td_planning_detail_tower_hight,
                            td_planning_detail.building_height as td_planning_detail_building_height,
                            td_planning_detail.region as td_planning_detail_region,
                            td_planning_detail.province_code as td_planning_detail_province_code, 
                            td_planning_detail.city_code as td_planning_detail_city_code,
                            td_planning_detail.address as td_planning_detail_address,
                            td_planning_detail.longitude as td_planning_detail_longitude,
                            td_planning_detail.latitude as td_planning_detail_latitude,
                            td_planning_detail.site_status as td_planning_detail_site_status,
                            td_planning_detail.wbs_id as td_planning_detail_wbs_id');
        $dbWBS->from($this->table);
        $dbWBS->join('td_planning_detail','td_planning_detail.planning_id = tm_planning.id','inner');
        $dbWBS->where(['tm_planning.is_status' => 'Released']);
        $dbWBS->where('tm_planning.deleted_at IS NULL', null, false);
        $dbWBS->where(['td_planning_detail.wbs_id' => $wbs_id]);
        return $dbWBS->get();
    }




}