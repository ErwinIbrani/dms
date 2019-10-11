<?php

class ComSitac_Model extends CI_Model
{
    protected $table       = 'document_project';
    protected $primaryKey  = 'id';

    public function getData($rowno,$rowperpage,$search="")
    {
        $this->db->select('project_assigment.id,
                           project.id as project_id,
                           project.wbs_id,
                           project.iro_number,
                           project.site_id_ibs,
                           vendor.id as vendor_id,
                           vendor.name as vendor_name,
                           project_assigment.assignment_type,
                           project_assigment.status');
        $this->db->from('project_assigment');
        $this->db->join('project','project_assigment.project_id = project.id','inner');
        $this->db->join('vendor','project_assigment.vendor_id = vendor.id','inner');
        $this->db->where('project_assigment.status = 1');
        $this->db->where('project_assigment.assignment_type', 'SITAC');

        if($search != ''){
          //  $this->db->like('project.wbs_id', $search);
            $this->db->like('vendor.name', $search);
        }
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();
        return $query->result();
    }

    public function getrecordCount($search = '')
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('project_assigment');
        $this->db->join('project','project_assigment.project_id = project.id','inner');
        $this->db->join('vendor','project_assigment.vendor_id = vendor.id','inner');
        $this->db->where('project_assigment.status = 1');
        $this->db->where('project_assigment.assignment_type', 'SITAC');
        if($search != ''){
           // $this->db->like('project.wbs_id', $search);
            $this->db->like('vendor.name', $search);
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }

    public function save($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function status($project_id, $vendor_id)
    {
        return $this->db->get_where($this->table, ['project_id' => $project_id, 'vendor_id' => $vendor_id, 'name' => 'COM SITAC', 'status' => 'Done']);
    }




    public function findOne($id)
    {
        return $this->db->get_where($this->table, [$this->primaryKey => $id, 'name' => 'COM SITAC']);
    }

    public function update($id, $update)
    {
        $this->db->where($this->primaryKey, $id);
        $this->db->update($this->table, $update);
    }


}