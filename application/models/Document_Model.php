<?php

class Document_Model extends CI_Model
{
    protected $table       = 'document_project';
    protected $primaryKey  = 'id';


    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function changeVendor($project_id, $vendor_id, $update)
    {
        $this->db->where(['project_id' => $project_id]);
        $this->db->where(['vendor_id' =>  $vendor_id]);
        return $this->db->update($this->table, $update);
    }

    public function findCandidateSurveyDone($project_id)
    {
        return $this->db->get_where($this->table, array('project_id' => $project_id, 'name' => 'SURVEY', 'status_revision' => 'Done'));
    }


}