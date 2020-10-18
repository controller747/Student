<?php

namespace Core\Db;

class Insert
{
	private $connector;
	
	private $tableName = ' ';
	
	private $columns = ' ';
	
	private $values = ' ';
	
	public function __construct()
	{
		$conObj = new Connector();
		$this->connector = $conObj->getConnector();
	}
	
	public function setTableName($name)
	{
		$this->tableName = $name;
	}
	
	public function setCondition(array $condition)
    {
        if(!empty($condition)) {
            foreach($condition as $columnName => $value) {
                if(empty($this->columns)) {
                    $this->columns = $columnName;
                    $this->values = '\'' . $value . '\'';
                } else {
                    $this->columns .= ', ' . $columnName;
                    $this->values .= ', ' . '\'' . $value . '\'';
                }
            }
        }
    }

    public function execute()
    {
        return mysqli_query($this->connector, $this->createSqlString());
    }
	
	private function createSqlString()
    {
        return 'INSERT INTO ' . $this->tableName . ' (' . $this->columns . ') VALUES (' .  $this->values . ')';
    }

}