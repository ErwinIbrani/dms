<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VendorUser_Model extends CI_Model {

	protected $table = 'users';

	protected $primaryKey = 'id';

	public function getData($search = null)
	{
		$query = $this->db->select('*')
			->from($this->table)
			->where('type', 'vendor');

		if(!is_null($search)){
			$query->like('username', $search);
		}

		return $query;
	}

	/**
	 * Get count all data
	 *
	 * @return mixed
	 */
	public function getCount($search = null)
	{
		$query = $this->db->from($this->table)
			->where('type', 'vendor');

		if(!is_null($search)) {
			$query->like('username', $search);
		}

		$query = $query->count_all_results();
		return $query;
	}

	/**
	 * Storing data to database.
	 *
	 * @param array $data
	 * @return bool
	 */
	public function storeData(array $data) {

		$username = $data['name'];
		$password = $data['password'];
		$email = $data['email'];
		$additional_data = array(
			'type' => $data['type'],
			'level' => $data['level'],
			'vendor' => $data['vendor']
		);
		$group = $data['role'];

		return $this->ion_auth->register($username, $password, $email, $additional_data, $group);
	}

	/**
	 * Find user vendor by id.
	 *
	 * @param $id
	 * @return mixed
	 */
	public function findById($id)
	{
		return $this->db->get_where($this->table, array('id' => $id, 'type' => 'vendor'))->row();
	}

	/**
	 * Update data
	 *
	 * @param array $data
	 * @param $id
	 * @return bool
	 */
	public function updateData(array $data, $user_id) {
		$this->ion_auth->remove_from_group(false, $user_id);
		$this->ion_auth->add_to_group($data['role'], $user_id);

		if(empty($data['password'])) {
			unset($data['password']);
		}

		$data['username'] = $data['name'];
		$this->ion_auth->update($user_id, $data);
	}

	/**
	 * Delete to a specify data.
	 *
	 * @param array $data
	 * @param $id
	 * @return bool
	 */
	public function deleteData($id) {
		$this->ion_auth->remove_from_group(false, $id);
		$this->db->where('id', $id);
		return	$this->db->delete($this->table);
	}

}
