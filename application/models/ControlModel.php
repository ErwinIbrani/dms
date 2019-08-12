<?php
/**
 * Created by PhpStorm.
 * User: GTI
 * Date: 07/08/2019
 * Time: 16:30
 */

class ControlModel extends CI_Model
{
    public function getData()
    {
        return $this->db->get('control_checklist');
    }

}