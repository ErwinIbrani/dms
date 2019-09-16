<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate_Model extends CI_Model
{
	protected $table = 'candidate';

	public function storeData(array $data)
	{
		return $this->db->insert($this->table, $data);
	}
}
