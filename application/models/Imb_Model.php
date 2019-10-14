<?php

class Imb_Model extends CI_Model
{
	public $sitac;

	function __construct()
	{
		parent::__construct();
		$this->sitac = $this->load->database('sitac2', TRUE);
	}

	public function getByWbsId($wbs_id)
	{
		 $this->sitac->select('*')
			->from('assignment')
		 	->join('document_upload', 'document_upload.unique_id = assignment.unique_id', 'inner')
		 	->where('assignment.wbs_id', $wbs_id);
		 return $this->sitac->get();
	}
}
