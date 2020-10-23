<?php


namespace Core\Db;


class Where
{
    private $where;
    private $columns;

    public function setWhere(string $temp)
    {
        $this->where = $temp;
    }

    public function setCondition(array $condition)
    {
        if(!empty($condition)) {
            foreach($condition as $columnName => $value) {
                if(empty($this->columns)) {
                    $this->where = $columnName . '=' . $value;
                }
            }
        }
    }