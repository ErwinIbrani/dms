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

    public function findStatusApproval($type, $document_id)
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
        $this->db->join('document_candidate','document_candidate.id = document_approval_history.document_id','inner');
        $this->db->join('users','document_approval_history.approved_id = users.id','inner');
        $this->db->join('document_setting','document_setting.group_id = document_approval_history.group_id','inner');
        $this->db->join('groups','document_setting.group_id = groups.id','inner');
        $this->db->where(['document_candidate.type' => $type]);
        $this->db->where(['document_candidate.id'   => $document_id]);
        return $this->db->get();
    }

    public function getAllStatusApproval($rowno,$rowperpage,$search="", $type)
    {

        $this->db->select('max(id)')
                 ->from('document_approval_history')
                 ->group_by('document_approval_history.document_id');

        $subquery = $this->db->get_compiled_select();
        $this->db->reset_query();

        $this->db->select('document_candidate.id,
                           document_approval_history.approved_at,
                           document_approval_history.status_approval,
                           document_approval_history.path,
                           document_approval_history.note,
                           users.email,
                           groups.name as role_name,
                           document_candidate.name,
                           document_candidate.status_revision,
                           document_candidate.status,
                           candidate.name as candidate_name,
                           vendor.name as vendor_name,
                           project.wbs_id');
        $this->db->from('document_candidate');
        $this->db->join('document_approval_history','document_candidate.id = document_approval_history.document_id','inner');
        $this->db->join("(SELECT    MAX(id) as id, document_id as document_id
                          FROM      document_approval_history 
                          GROUP BY  document_id ) as document_approval_historys","document_candidate.id = document_approval_historys.document_id", 'inner');

        $this->db->join('candidate','document_candidate.candidate_id = candidate.id','inner');
        $this->db->join('vendor','document_candidate.vendor_id = vendor.id','inner');
        $this->db->join('project','document_candidate.project_id = project.id','inner');
        $this->db->join('users','document_approval_history.approved_id = users.id','inner');
        $this->db->join('groups','document_approval_history.group_id = groups.id','inner');
        $this->db->where(['document_candidate.type' => $type]);
        if($search != ''){
            $this->db->like('candidate.name', $search);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result();
    }

    public function getrecordCountAllStatusApproval($search = '', $type)
    {
        $this->db->select('count(*) as allcount');
        $this->db->from($this->table);
        $this->db->join('document_candidate','document_candidate.id = document_approval_history.document_id','inner');
        $this->db->join('candidate','document_candidate.candidate_id = candidate.id','inner');
        $this->db->join('vendor','document_candidate.vendor_id = vendor.id','inner');
        $this->db->join('project','document_candidate.project_id = project.id','inner');
        $this->db->join('users','document_approval_history.approved_id = users.id','inner');
        $this->db->join('groups','document_approval_history.group_id = groups.id','inner');
        $this->db->where(['document_candidate.type' => $type]);
        if($search != ''){
            $this->db->like('candidate.name', $search);
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
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

    public function continueApprove($document_id, $type)
    {
        $this->db->where('document_id', $document_id);
        $this->db->where('status_approval', $type);
        $this->db->delete($this->table);
    }




}