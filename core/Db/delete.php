<?php


namespace Core\Db;


class Delete
{
    private $connector;

    protected $tableName = '';

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

    public function setCondition($id)
    {

            $this->id = $id;

    }

    private function createSqlString()
    {
        return 'DELETE FROM ' . $this->tableName . ' WHERE id = ' . $this->id;
    }

    public function execute()
    {
        return mysqli_query($this->connector, $this->createSqlString());
    }

}