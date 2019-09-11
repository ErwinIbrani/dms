<?php

class Pic_Model extends CI_Model
{
    protected $table       = 'pic_project';
    protected $primaryKey  = 'id';

    public function pic()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get();
    }

    public function getData($rowno,$rowperpage,$search="")
    {
        $this->db->select('project.wbs_id, 
                            project.iro_number,
                            pic_project.id, 
                            pic_project.project_id, 
                            pic_project.layer,
                            pic_project.email,
                            pic_project.username');
        $this->db->from($this->table);
        $this->db->join('project','pic_project.project_id = project.id','inner');
        $this->db->where('project.deleted_at IS NULL', null, false);
        if($search != ''){
            $this->db->like('pic_project.username', $search);
            $this->db->or_like('pic_project.email', $search);
            $this->db->or_like('pic_project.layer', $search);
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
        $this->db->join('project','pic_project.project_id = project.id','inner');
        $this->db->where('project.deleted_at IS NULL', null, false);
        if($search != ''){
            $this->db->like('pic_project.username', $search);
            $this->db->or_like('pic_project.email', $search);
            $this->db->or_like('pic_project.layer', $search);
            $this->db->or_like('project.wbs_id', $search);
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }

    public function duplicate($username, $project_id)
    {
        $this->db->select(['email', 'project_id']);
        $this->db->from($this->table);
        $this->db->where(['username' => $username]);
        $this->db->where(['project_id' => $project_id]);
        return $this->db->get();
    }


    public function save($data)
    {
        $this->db->insert($this->table, $data);
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
    public function findByProject($project_id)
    {
        return $this->db->get_where($this->table, ['project_id' => $project_id]);
    }
}