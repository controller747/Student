<?php
$var = 'bigbadabum';
function functype($var)
{
	if (($var) != bool){
		echo gettype($var);
	}
	else
		echo "Zapolni formu";
}	
functype($var);
echo '<br>';
function functype1($var)
{
	if (gettype($var) === string){
		echo substr_count($var, 'b');
	}
	else {
		echo 'false';
	}
}
functype1($var);
echo '<br>';
function functype2($arr)
{
		$sum = 0;           
    for ($i = 0; $i < count($arr); $i++){
		$sum = $sum + $arr[$i];
    }
    return $sum;
}
echo functype2(array(1, 3, 56, 34, -1, -65, 156));
echo '<br>'; // изначально отталкивался от этого варианта, но он почему-то не работает, где ошибка, ведь этот вариант почти повторяет тоже самое что и в следующем варианте?
$a = 20;
$square = $a * $a;
$b = 4;
$square1 = $b * $b; 
function functype3($square, $square1){
    return (float)($square) / ($square1);	
}
functype3($square, $square);
echo '<br>'; // а вот этот вариант сработал)
function findSqr($sqSide, $sqSide1){
    return (float)($sqSide * $sqSide) / ($sqSide1 * $sqSide1);
}

echo findSqr(20, 4);



//$var = 5;
//function myFunc($var)
//{ 
	//var_export($var);
//}
//myFunc($var);
//echo '<br>';
//function myFunc2($var)
//{
	//return $var+$var;
//}
//myFunc(myFunc2($var));
//echo '<br>';
//function myFunc3($var)
//{
	//$var = 10;
	//$var = myFunc2($var);
	//myFunc($var);
//}
//myFunc3($var);
//echo '<br>';
//function myFunc4($var = 7)
//{
	//$var = myFunc2($var);
	//myFunc($var);
//}
//myFunc4();
//echo '<br>';
//function myFunc5($var = NULL)
//{
	//if (NULL === $var){
		//$var = 10;
	//}
	//$var = myFunc2($var);
	//myFunc($var);
//}
//myFunc5($var);