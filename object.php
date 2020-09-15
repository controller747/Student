<?php
//1) Создать родительский (главный класс)
//Класс должен содержать 2 свойства
//Каждое свойство должно иметь геттеры и сеттеры
class First
{
	public $var = 1;
	public $var1 = 2;
	public function getVar()
	{
		return $this->var;
	}
	public function getVar1()
	{
		return $this->var1;
	}
	public function setVar($value)
	{
		$this->var = $value;  	
	}
	public function setVar1($value)
	{
		$this->var1 = $value;
	}
}
$first = new First;
var_export($first);
echo '<br>';

//2) Создать 3 наследника родительского класса
//Каждый наследник должен содержать одно свойство
//Каждое свойство должно иметь геттер и сеттер
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
//Один наследник не должен быть наследуемым
//Один из наследников должен содержать абстрактную функцию возведения в степень
class Second extends First
{
	public $var2 = 3;
	public function getVar2()
	{
		return $this->var2;
	}
	public function setVar2($value)
	{
		$this->var2 = $value;  	
	}
	public function sumVar($value)
	{
		return $this->var1 + $this->var2;	
	}
}
$second = new Second;
echo $second->sumVar($value);
echo '<br>';
class Third extends First 
{
	public $var3 = 4;
	public function getVar3()
	{
		return $this->var3;
	}
	public function setVar3($value)
	{
		$this->var3 = $value;
	}
	public function minusVar($value)
	{
		return $this->var3 - $this->var;
	}
}
$third = new Third;
echo $third->minusVar($value);
echo '<br>';
abstract class Fourth extends First
{
	public $var4 = 4;
	public function getVar4()
	{
		return $this->var4;
	}
	public function setVar4($value)
	{
		$this->var4 = $value; 
	}
	abstract public function abstractVar($value);
	//{
		//return pow($this->var4, $this->var);
	//}
}

echo '<br>';

//3) Создать по 2 наследника от наследников первого уровня
//Каждое свойство должно иметь геттер и сеттер
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
//И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством
//В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции

class Fifth extends Second
{
	public $var5 = 5;
	public function getVar5()
	{
		return $this->var5;
	}
	public function setVar5($value)
	{
		$this->var5 = $value; 
	}
	public function sumVar1($value)
	{
		return $this->var5 + $this->var2;	
	}
	public function sumVar11($value)
	{
		return $this->var5 + $this->var;	
	}
}
$fifth = new Fifth;
echo $fifth->sumVar1($value);
echo '<br>';
echo $fifth->sumVar11($value);
echo '<br>';
class Sixth extends Second
{
	public $var6 = 6;
	public function getVar6()
	{
		return $this->var6;
	}
	public function setVar6($value)
	{
		$this->var6 = $value; 
	}
	public function sumVar2($value)
	{
		return $this->var6 + $this->var2;	
	}
	public function sumVar12($value)
	{
		return $this->var6 + $this->var;	
	}
}
$sixth = new Sixth;
echo $sixth->sumVar2($value);
echo '<br>';
echo $sixth->sumVar12($value);
echo '<br>';
class Seventh extends Third
{
	public $var7 = 7;
	public function getVar7()
	{
		return $this->var7;
	}
	public function setVar7($value)
	{
		$this->var7 = $value; 
	}
	public function minusVar1($value)
	{
		return $this->var7 - $this->var3;
	}
	public function minusVar11($value)
	{
		return $this->var7 - $this->var1;
	}
}
$seventh = new Seventh;
echo $seventh->minusVar1($value);
echo '<br>';
echo $seventh->minusVar11($value);
echo '<br>';
class Eighth extends Third
{
	public $var8 = 8;
	public function getVar8()
	{
		return $this->var8;
	}
	public function setVar8($value)
	{
		$this->var8 = $value; 
	}
	public function minusVar2($value)
	{
		return $this->var8 - $this->var3;
	}
	public function minusVar12($value)
	{
		return $this->var8 - $this->var1;
	}
}
$eighth = new Eighth;
echo $eighth->minusVar2($value);
echo '<br>';
echo $eighth->minusVar12($value);
echo '<br>';
class Ninth extends Fourth
{
	public $var9 = 9;
	public function getVar9()
	{
		return $this->var9;
	}
	public function setVar9($value)
	{
		$this->var9 = $value;
	}
	public function abstractVar($value)
	{
		echo pow($this->var1, $this->var9);
	}
}	
$ninth = new Ninth;
echo $ninth->abstractVar($value);
echo '<br>';
class Zero extends Fourth
{
	public $var0 = 10;
	public function getVar0()
	{
		return $this->var0;
	}
	public function setVar0($value)
	{
		$this->var0 = $value;
	}
	public function abstractVar($value)
	{
		echo pow($this->var1, $this->var9);
	}
}	
$zero = new Zero;
echo $zero->abstractVar($value);