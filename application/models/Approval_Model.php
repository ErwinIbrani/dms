<?php

class Approval_Model extends CI_Model
{
    protected  $table = 'document_approval_setting';

    public function getApproverTSA($rowno, $rowperpage, $search="", $group_id, $user_id)
    {
        $this->db->select('project.wbs_id,
                           pic.email, 
                           approval.email');
        $this->db->from($this->table);
        $this->db->join('project',           'project.id = document_approval_setting.project_id','inner');
        $this->db->join('users as pic',      'pic.id = document_approval_setting.pic_id','inner');
        $this->db->join('users as approval', 'approval.id = document_approval_setting.approval_id','inner');
        $this->db->join('document_setting',  'document_setting.id = document_approval_setting.document_setting_id','inner');
        $this->db->join('groups',            'groups.id = document_setting.group_id','inner');
        $this->db->where(['document_setting.document_name' => 'SITAC TSA']);
        $this->db->where(['document_setting.group_id' => $group_id]);
        $this->db->where(['document_approval_setting.approval_id' => $user_id]);
        //$this->db->order_by("document_setting.step", "asc");
        if($search != ''){
            $this->db->like('pic.email', $search);
            $this->db->or_like('approval.email', $search);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result();
    }

    public function getrecordCountTSA($search = '', $group_id, $user_id)
    {
        $this->db->select('count(*) as allcount');
        $this->db->from($this->table);
        $this->db->join('project',           'project.id = document_approval_setting.project_id','inner');
        $this->db->join('users as pic',      'pic.id = document_approval_setting.pic_id','inner');
        $this->db->join('users as approval', 'approval.id = document_approval_setting.approval_id','inner');
        $this->db->join('document_setting',  'document_setting.id = document_approval_setting.document_setting_id','inner');
        $this->db->join('groups',            'groups.id = document_setting.group_id','inner');
        $this->db->where(['document_setting.document_name' => 'SITAC TSA']);
        $this->db->where(['document_setting.group_id' => $group_id]);
        $this->db->where(['document_approval_setting.approval_id' => $user_id]);
        //$this->db->order_by("document_setting.step", "asc");
        if($search != ''){
            $this->db->like('pic.email', $search);
            $this->db->or_like('approval.email', $search);
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }

}