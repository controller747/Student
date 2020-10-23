<?php

namespace App\Model;

use Core\Db\Select;
use Core\Db\Delete;

class Roles
{	
    public $tableName;	    
    public $id;
    public $role_name;
	
	public function getTableName()
    {
        return $this->tableName;
    }
	
	 public function saveRole(array $condition)
    {
	
	}
	
	public function deleteRole(int $id)
    {
        $delete = new Delete();
        $delete->setTableName($this->tableName);
        $delete->where('id=' . $id);
        $delete->execute();
    }
	
	public function getRole(int $id)
    {
        if ($id > 0) {
            $select = new Select();
            $select->setTableName($this->tableName);
            $select->setWhere('id=' . $id);
            $select->execute();
        }
    }
    public function getRoles(array $ids = [])
    {
        $select = new Select();
        $select->setTableName($this->tableName);
        $select->setWhere($ids);
        $select->execute();
    }
}