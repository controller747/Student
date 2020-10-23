<?php

namespace App\Model;

use Core\Db\Select;
use Core\Db\Delete;

class Users	
{
	public $tableName = 'users';
    
	public $id;	   
    	    	    
	public function getTableName()
	{
        return $this->tableName;
    }
	
	public function saveUser(array $condition)
    {
		
	}

	public function deleteUser(int $id)
    {
        $delete = new Delete();
        $delete->setTableName($this->tableName);
        $delete->where('id=' . $id);
        $delete->execute();
    }
	
	public function getUser(int $id)
    {
        if ($id > 0) {
            $select = new Select();
            $select->setTableName($this->tableName);
            $select->setWhere('id=' . $id);
            $select->execute();
        }
    }
	
	public function getUsers(array $ids = [])
    {
        $select = new Select();
        $select->setTableName($this->tableName);
        $select->setWhere($ids);
        $select->execute();
    }

}
		