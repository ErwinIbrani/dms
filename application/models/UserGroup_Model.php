<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class UserGroup_Model extends yidas\Model {
    
    protected $table = 'groups';

    protected $primaryKey = 'id';


	/**
	 * Get all list of data user groups.
	 *
	 * @return mixed
	 */
	public function getAllList() {
		return $this->find(true)->get()->result_array();
	}

	/**
	 * Storing data to database.
	 *
	 * @param array $data
	 * @return bool
	 */
    public function storeData(array $data) {
    	return $this->insert($data);
    }

    public function updateData(array $data, $id) {
		$this->find()->where('id', $id);
    	return $this->update($data);
	}


}
