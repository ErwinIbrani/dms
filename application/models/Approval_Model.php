<?php

class Approval_Model extends CI_Model
{
         protected  $table = 'document_approval_setting';

        public function getApproverTSA($rowno, $rowperpage, $group_id, $user_id)
        {
                $this->db->select('project.wbs_id,
                                   project.iro_number,
                                   vendor.name as vendor_name,
                                   document_candidate.id as document_candidate_id,
                                   candidate.name as candidate_name,
                                   approval.id as user_id
                                   ');
                $this->db->from($this->table);
                $this->db->join('users as pic',       'pic.id = document_approval_setting.pic_id','inner');
                $this->db->join('users as approval',  'approval.id = document_approval_setting.approval_id','inner');
                $this->db->join('project',            'project.id = document_approval_setting.project_id','inner');
                $this->db->join('document_candidate', 'project.id = document_candidate.project_id','inner');
                $this->db->join('vendor',             'vendor.id = document_candidate.vendor_id','inner');
                $this->db->join('candidate',          'candidate.id = document_candidate.candidate_id','inner');
                $this->db->join('document_setting',   'document_setting.id = document_approval_setting.document_setting_id','inner');
                $this->db->join('groups',             'groups.id = document_setting.group_id','inner');
                $this->db->where(['document_candidate.name' => 'TSA']);
                $this->db->where(['document_setting.document_name' => 'SITAC TSA']);
                $this->db->where(['document_setting.group_id' => $group_id]);
                $this->db->where(['document_approval_setting.approval_id' => $user_id]);
                $this->db->limit($rowperpage, $rowno);
                $query = $this->db->get();
                return $query->result();
        }

        public function getrecordCountTSA($group_id, $user_id)
        {
                $this->db->select('count(*) as allcount');
                $this->db->from($this->table);
                $this->db->join('users as pic',       'pic.id = document_approval_setting.pic_id','inner');
                $this->db->join('users as approval',  'approval.id = document_approval_setting.approval_id','inner');
                $this->db->join('project',            'project.id = document_approval_setting.project_id','inner');
                $this->db->join('document_candidate', 'project.id = document_candidate.project_id','inner');
                $this->db->join('vendor',             'vendor.id = document_candidate.vendor_id','inner');
                $this->db->join('candidate',          'candidate.id = document_candidate.candidate_id','inner');
                $this->db->join('document_setting',   'document_setting.id = document_approval_setting.document_setting_id','inner');
                $this->db->join('groups',             'groups.id = document_setting.group_id','inner');
                $this->db->where(['document_candidate.name' => 'TSA']);
                $this->db->where(['document_setting.document_name' => 'SITAC TSA']);
                $this->db->where(['document_setting.group_id' => $group_id]);
                $this->db->where(['document_approval_setting.approval_id' => $user_id]);
                $query = $this->db->get();
                $result = $query->result_array();
                return $result[0]['allcount'];
        }


        public function save($data)
        {
            $this->db->insert('document_approval_history', $data);
        }



}