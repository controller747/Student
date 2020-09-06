<?php
 $study = [
		'one' => 1,
		'two' => 2,
		'three' => 3,
		'four' => 'dog',
		'five' => 'apple'
		];
 $arr = [
	'one' => 1,
	'two' => 2,
	'three' => 3,
	];
 $arr1 = [
	'two' => 1,
	'one' => 2,
	'three' => 3,
	];
 $arr2 = [
	'three' => 1,
	'two' => 2,
	'one' => 3,
	];
	
	// echo $arr['one']; //
	// echo $arr1['one']; //
	// echo $arr2['one']; //
	
	$array = array_values($arr);
	$arrab = array_values($arr1);
	$arrac = array_values($arr2);
	
	// echo $array[1]; //
	// echo $arrab[1]; //
	// echo $arrac[1]; //
	//$arrakeys = $study;
	//var_export array_keys($study);

 //var_export(array_slice($study, 1, 4));

$ar4 = [
	'one' => 1,
	'two' => [
	  'one' => 1,
	  'two' => 2,
	],  
	'tree' => [
	  'one' => 1,
	  'two' => 2,
	]];
	foreach($ar4 as $key => $value) {
		if (is_array($ar4[$key])) {
			foreach($ar4[$key] as $key1 => $value1) {
				echo $value1;
			}
		}
			else {
			    echo $value; 				
				
		}			
	}
		
		
		