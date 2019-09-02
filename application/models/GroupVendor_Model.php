<?php

class GroupVendor_Model extends yidas\Model
{
    protected $table       = "group_vendor";
    protected $primaryKey  = 'id';
    //const SOFT_DELETED     = 'is_deleted';
    //protected $softDeletedFalseValue = '0';
    //protected $softDeletedTrueValue = '1';
    const CREATED_AT       = 'created_at';
    const UPDATED_AT       = 'updated_at';

  /*  public function rules()
    {
        $this->lang->load('error_messages', 'en-US');
        return [
                [
                    'field' => 'group_name',
                    'rules' => 'required|max_length[255]',
                ],
          ];
    }*/
}