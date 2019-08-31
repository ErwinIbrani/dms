<?php

class GroupVendor_Model extends yidas\Model
{
    protected $table = "group_vendor";
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_time';
    const UPDATED_AT = 'updated_time';
}