<?php

class DocumentApprovalHistory_Model extends CI_Model
{
    protected  $table = 'document_approval_history';

    public function getLastApprove($document_id)
    {
      return $this->db->select('*')->where(['document_id' => $document_id])->order_by('id',"desc")->limit(1)->get($this->table);
    }

    public function findStatus($document_id)
    {
        return $this->db->get_where($this->table, ['document_id' => $document_id]);
    }




}