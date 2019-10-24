<?php

class DocumentApprovalHistory_Model extends CI_Model
{
    protected  $table      = 'document_approval_history';
    protected $primaryKey  = 'id';

    public function getLastApprove($document_id)
    {
      return $this->db->select('*')->where(['document_id' => $document_id])->order_by('id',"desc")->limit(1)->get($this->table);
    }

    public function findStatus($document_id)
    {
        return $this->db->get_where($this->table, ['document_id' => $document_id]);
    }

    public function findStatusApproval($type)
    {
        $this->db->select('document_approval_history.id,
                           document_approval_history.approved_at,
                           document_approval_history.status_approval,
                           document_approval_history.path,
                           document_approval_history.note,
                           document_setting.document_type,
                           users.email,
                           groups.name as role_name');
        $this->db->from($this->table);
        $this->db->join('users','document_approval_history.approved_id = users.id','inner');
        $this->db->join('document_approval_setting','document_approval_history.approved_id = document_approval_setting.approval_id','inner');
        $this->db->join('document_setting','document_setting.id = document_approval_setting.document_setting_id','inner');
        $this->db->join('groups','document_setting.group_id = groups.id','inner');
        $this->db->where(['document_setting.document_name' => $type]);
       /* $this->db->where(['document_setting.group_id' => $group_id]);
        $this->db->where(['document_approval_setting.approval_id' => $user_id]);*/
        return $this->db->get();
    }

    public function save($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($id, $update)
    {
        $this->db->where($this->primaryKey, $id);
        $this->db->update($this->table, $update);
    }

    public function duplicate($document_id, $approved_id)
    {
        $this->db->select('document_approval_history.document_id,
                           document_approval_history.approved_id');
        $this->db->from($this->table);
        $this->db->where(['document_approval_history.document_id' => $document_id]);
        $this->db->where(['document_approval_history.approved_id' => $approved_id]);
        return $this->db->get();
    }




}