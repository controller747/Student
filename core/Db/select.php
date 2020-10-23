<?php


namespace Core\Db;


class Select
{
	protected $column = '*';
	
	protected $tableName = '';
	
	protected $where;
	
	
	
	public function setTableName(string $name)
    {
        $this->tableName = $name;
    }
	
	public function setCondition(array $condition)
    {
		if(is_array($condition)){
            foreach ($condition as $value){
                if($this->column == '*') {
                    $this->column = $value;
                } else {
                    $this->column .= ', ' . $value;
                }
            }
        } else {
            $this->column = $condition;
        }
    }
	
	public function setWhere(string $where)
    {
        $this->where = $where;
    }
	
	public function setGroupBy(string $group)
    {
        $this->group = $group;
    }
	
	public function setLimit(int $limit, int $offset = null)
    {
        if($offset > 0) {
            $this->limit = $offset . ', ' . $limit;
        } else {
            $this->limit = $limit;
        }
    }
	
	public function setOrderBy($order)
    {
        if(is_array($order)) {
            foreach ($order as $key => $value) {
                if(empty($this->orderBy)) {
                    $this->orderBy = $key . ' ' . $value;
                } else {
					$this->orderBy = $order;
                }
            }
		}
	}
	 
	private function createSqlString()
    {
        $sql = ' SELECT ' . $this->column . ' FROM ' . $this->tableName;
		if(!empty($this->where)) {
            $sql .=   ' WHERE ' . $this->where;
        }
		 if(!empty($this->group)) {
            $sql .=   ' GROUP BY ' . $this->group;
        }
        if(!empty($this->orderBy)) {
            $sql .=   ' ORDER BY ' . $this->orderBy;
        }
        if(!empty($this->limit)) {
            $sql .=   ' LIMIT ' . $this->limit;
        }
		return $sql;
    }
	
	public function execute()
    {
        return mysqli_query($this->connector, $this->createSqlString());
    }
}