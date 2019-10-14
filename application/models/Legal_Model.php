<?php

class Legal_Model extends CI_Model
{
	public $legal;

	function __construct()
	{
		parent::__construct();
		$this->legal = $this->load->database('legal', TRUE);
	}

	public function getByWbsId($wbs_id)
	{
		$this->legal->select('*')
			->from('assignment')
			->join('document_upload', 'document_upload.unique_id = assignment.unique_id', 'inner')
			->where('assignment.wbs_id', $wbs_id);
		return $this->legal->get();
	}
}
