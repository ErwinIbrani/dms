<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class UserGroup_Model extends CI_Model {
    
    protected $table = 'groups';

    protected $primaryKey = 'id';


	/**
	 * Get all list of data user groups.
	 *
	 * @return mixed
	 */
	public function getAllList($rowPerpage,$rowNo) {
		return  $this->db->select('*')
			->from($this->table)
			->limit($rowPerpage, $rowNo)
			->get()
			->result();
	}

	public function getData()
	{
		return $this->db->get($this->table);
	}

	/**
	 * Get count all data
	 *
	 * @return mixed
	 */
	public function getCount()
	{
		return $this->db->count_all_results($this->table);
	}

	/**
	 * Storing data to database.
	 *
	 * @param array $data
	 * @return bool
	 */
    public function storeData(array $data) {
    	return $this->db->insert($this->table, $data);
    }

	/**
	 * Update data
	 *
	 * @param array $data
	 * @param $id
	 * @return bool
	 */
    public function updateData(array $data, $id) {
    	$this->db->where('id', $id);
		return	$this->db->update($this->table, $data);
	}

	/**
	 * Delete to a specify data.
	 *
	 * @param array $data
	 * @param $id
	 * @return bool
	 */
	public function deleteData($id) {
		$this->db->where('id', $id);
		return	$this->db->delete($this->table);
	}

}
