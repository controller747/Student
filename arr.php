<?php
 $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
 var_export(count($arr));
 echo '<br>' ;
 $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
 $newarr = array_slice($arr, 4);
 $newarr1 = array_slice($arr, 0, -5);
 $result = array_merge($newarr, $newarr1);
 var_export($result);
 echo '<br>' ;
 $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
 echo $arr[4] + $arr[5] + $arr[6];
 $firstArr = [
	'one' => 1,
	'two' => 2,
	'three' => 3,
	'foure' => 5,
	'five' => 12,
    ];
 $secondArr = [
	'one' => 1,
	'seven' => 22,
	'three' => 32,
	'foure' => 5,
	'five' => 13,
	'six' => 37,
	];
	echo '<br>';
	function key_compare_func($key1, $key2){
    if ($key1 == $key2)
        return 0;
    else if ($key1 > $key2)
        return 1;
    else
        return -1;}
	$firstArr = [
		'one' => 1,
		'two' => 2,
		'three' => 3,
		'foure' => 5,
		'five' => 12,
		];
	$secondArr = [
		'one' => 1,
		'seven' => 22,
		'three' => 32,
		'foure' => 5,
		'five' => 13,
		'six' => 37,
		];
	var_export(array_diff_ukey($secondArr, $firstArr, 'key_compare_func'));
	echo '<br>';
	var_export(array_diff_key($firstArr, $secondArr));
	echo '<br>';
	var_export(array_intersect_assoc($firstArr, $secondArr));
	echo '<br>';
	$result = array_diff_assoc($firstArr, $secondArr);
	var_export($result);
	echo '<br>';
	$firstArr = [
	'one' => 1,
	'two' => [
		'one' => 1,
		'seven' => 22,
		'three' => 32,
	],
	'three' => [
		'one' => 1,
		'two' => 2,
	],
	'foure' => 5,
	'five' => [
		'three' => 32,
		'foure' => 5,
		'five' => 12,
	],  
	];
	echo $firstArr['two']['seven'];
	echo '<br>';
	echo $firstArr['three']['two'];
	echo '<br>';
	echo $firstArr['five']['foure'];
	echo '<br>';
	echo count($firstArr, COUNT_RECURSIVE);
	echo '<br>';
	function sum_array_multi($firstArr, $sum = []){
		foreach($firstArr as $key=>$value) {
			if (is_array($value))
				$sum = sum_array_multi($value, $sum);
			else
				$sum[$key] += (int)$value;
		}
		return $sum;
	}
	$sum = sum_array_multi($firstArr);
	$sum1 = array_sum($sum);
	var_export($sum1);
		
 //$arr = [
	//'one' => 1,
	//'two' => 2,
	//'three' => 3,
	//];
 //$arr1 = [
	//'two' => 1,
	//'one' => 2,
	//'three' => 3,
	//];
 //$arr2 = [
	//'three' => 1,
	//'two' => 2,
	//'one' => 3,
	//];
	
	// echo $arr['one']; //
	// echo $arr1['one']; //
	// echo $arr2['one']; //
	
	//$array = array_values($arr);
	//$arrab = array_values($arr1);
	//$arrac = array_values($arr2);
	
	// echo $array[1]; //
	// echo $arrab[1]; //
	// echo $arrac[1]; //
	//$arrakeys = $study;
	//var_export array_keys($study);

 //var_export(array_slice($study, 1, 4));

//$ar4 = [
	//'one' => 1,
	//'two' => [
	  //'one' => 1,
	 // 'two' => 2,
	//],  
	//'tree' => [
	 // 'one' => 1,
	 // 'two' => 2,
	//]];
	//foreach($ar4 as $key => $value) { 
		//if (is_array($ar4[$key])) {
			//foreach($ar4[$key] as $key1 => $value1) {
				//echo $value1;
			//}
		//}
			//else {
			    //echo $value; 				
				
		//}			
	//}	