<?php


namespace Core\Db;


class Update
{
    private $connector;

    protected $tableName = '';

    protected $columns = '';

    protected $values = '';
	
	protected $id = 0;

    public function __construct()
    {
        $conObj = new Connecter();
        $this->connector = $conObj->connectDB();
    }

    public function setTableName(string $name)
    {
        $this->tableName = $name;
    }

    public function setCondition(array $condition)
    {
        if(!empty($condition)) {
            foreach($condition as $columnName => $value) {
                if(empty($this->columns)) {
                    $this->values = $columnName . '= \'' . $value . '\'';
                } else {
                    $this->values = ', ' . $columnName . '= \'' . $value . '\'';
                }
            }
        }
    }

    private function createSqlString()
    {
        return 'UPDATE ' . $this->tableName . ' SET ' . $this->values . ' WHERE id = ' . $this->id ;
    }

    public function execute()
    {
        return mysqli_query($this->connector, $this->createSqlString());
    }

}