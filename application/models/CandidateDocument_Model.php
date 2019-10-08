<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CandidateDocument_Model extends CI_Model
{
	protected $table = 'document_candidate';

	public function findOne($id)
	{
		return $this->db->get_where($this->table, array('id' => $id));
	}

    public function getData($rowno,$rowperpage,$search="")
    {
        $this->db->select('document_candidate.id,
                           document_candidate.created_at,
                           document_candidate.path,
                           candidate.name as candidate_name,
                           vendor.name as vendor_name,
                           project.wbs_id');
        $this->db->from($this->table);
        $this->db->join('candidate','document_candidate.candidate_id = candidate.id','inner');
        $this->db->join('vendor','document_candidate.vendor_id = vendor.id','inner');
        $this->db->join('project','document_candidate.project_id = project.id','inner');
        if($search != ''){
            $this->db->like('candidate.name', $search);
            $this->db->or_like('vendor.name', $search);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result();
    }

    public function getrecordCount($search = '')
    {
        $this->db->select('count(*) as allcount');
        $this->db->from($this->table);
        $this->db->join('candidate','document_candidate.id = candidate.id','inner');
        $this->db->join('vendor','document_candidate.vendor_id = vendor.id','inner');
        $this->db->join('project','document_candidate.project_id = project.id','inner');
        if($search != ''){
            $this->db->like('candidate.name', $search);
            $this->db->or_like('vendor.name', $search);
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
        $this->db->where('id', $id);
        $this->db->update($this->table, $update);
    }
}
