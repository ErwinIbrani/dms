<?php

class DocumentApprovalSetting_Model extends CI_Model
{
    protected $table       = 'document_approval_setting';
    protected $primaryKey  = 'id';

    public function getData($rowno,$rowperpage,$search="")
    {
        $this->db->select('document_approval_setting.id,
                           project.wbs_id,
                           project.iro_number,
                           project.site_id_ibs, 
                           pic.email as pic,
                           approval.email as approval,
                           document_setting.document_name,
                           document_setting.document_type,
                           document_approval_setting.layer,
                           groups.name as group_name');
        $this->db->from($this->table);
        $this->db->join('project','document_approval_setting.project_id = project.id','inner');
        $this->db->join('users as pic','document_approval_setting.pic_id = pic.id','inner');
        $this->db->join('users as approval','document_approval_setting.approval_id = approval.id','inner');
        $this->db->join('document_setting','document_approval_setting.document_setting_id = document_setting.id','inner');
        $this->db->join('groups','document_setting.group_id = groups.id','inner');
        if($search != ''){
            $this->db->like('document_setting.document_name', $search);
            $this->db->or_like('project.wbs_id', $search);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result();
    }

    public function getrecordCount($search = '')
    {
        $this->db->select('count(*) as allcount');
        $this->db->from($this->table);
        $this->db->join('project','document_approval_setting.project_id = project.id','inner');
        $this->db->join('users as pic','document_approval_setting.pic_id = pic.id','inner');
        $this->db->join('users as approval','document_approval_setting.approval_id = approval.id','inner');
        $this->db->join('document_setting','document_approval_setting.document_setting_id = document_setting.id','inner');
        $this->db->join('groups','document_setting.group_id = groups.id','inner');
        if($search != ''){
            $this->db->like('document_setting.document_name', $search);
            $this->db->or_like('project.wbs_id', $search);
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
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

    public function saveMultiple($data)
    {
        return $this->db->insert_batch($this->table, $data);
    }

    public function findApprovalTSA($project_id, $uer_id)
    {
        $this->db->select('document_approval_setting.id,
                           project.wbs_id,
                           project.iro_number,
                           project.site_id_ibs, 
                           pic.email as pic,
                           approval.email as approval,
                           document_setting.document_name,
                           document_setting.document_type,
                           document_approval_setting.layer,
                           document_approval_setting.status,
                           groups.name as group_name');
        $this->db->from($this->table);
        $this->db->join('project','document_approval_setting.project_id = project.id','inner');
        $this->db->join('users as pic','document_approval_setting.pic_id = pic.id','inner');
        $this->db->join('users as approval','document_approval_setting.approval_id = approval.id','inner');
        $this->db->join('document_setting','document_approval_setting.document_setting_id = document_setting.id','inner');
        $this->db->join('groups','document_setting.group_id = groups.id','inner');
        $this->db->where(['document_approval_setting.project_id' => $project_id]);
        $this->db->where(['document_approval_setting.approval_id' => $uer_id]);
        $this->db->where(['document_setting.document_name' => 'SITAC TSA']);
        return $this->db->get();
    }

}