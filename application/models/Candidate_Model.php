<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate_Model extends CI_Model {

    protected $table = 'candidate';

    public function storeData(array $data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function getCandidateById($candidate_id) {
        return $this->db->get_where($this->table, array('id' => $candidate_id));
    }

    public function save($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function getByProject($project_id, $vendor_id) {
        $this->db->from($this->table);
        $this->db->where('project_id', $project_id);
        if (!is_null($vendor_id)) {
            $this->db->where('vendor_id', $vendor_id);
        }
        return $this->db->get();
    }

    public function update($id, $update) {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $update);
    }
    
    public function get_all(){
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get();
    }
    
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

}
