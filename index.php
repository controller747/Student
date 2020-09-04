<?php
    $a = 7;
	$b = 3;
	echo $a % $b;
	echo '<br>';
	$c = 7;
	$d = 7.15;
	echo floor($c + $d);
	echo '<br>';
	echo bcsqrt ('25');
	echo '<br>'
	?>
	
	<?php
	echo substr('Десять негритят пошли купаться в море', 41,-12);
	echo '<br>';
	echo substr('Десять негритят пошли купаться в море', 17,-50);
	echo '<br>'
	?>
	
	<?php
	$str='Десять негритят пошли купаться в море';
     $str=mb_convert_case($str,MB_CASE_TITLE,'UTF-8');
	 echo $str;
	 echo '<br>'
	 ?>
	 
	 <?php
		$str = 'Десять негритят пошли купаться в море';
		echo strlen($str);
		echo '<br>'
		?>
		
	<?php
	$true = 1;
	$false = 0;
	var_dump(true == 1);
	echo '<br>';
	$true = 1;
	$false = 0;
	var_dump(false === 0);
	echo '<br>';
	$str = three;
	$str1 = три;
	if ( $str > $str1 ) {
	echo 'three';
	}
	if ( $str < $str1 ) {
	echo 'три';
	}
	echo '<br>';
	$a = 125 * 13 + 7;
	$b = 223 + 28 * 2;
	if ( $a > $b ) {
	echo 'Первое математическое действие больше';
	}
	if ( $a < $b ) {
	echo 'Второе математическое действие больше';
	}
	echo '<br>' /* Выполнил домашку в двух вариантах, какой из вариантов более корректный? или какой-то из вариантов вообще не верный? */
	?>
	

	
	
	<?php
	$a = 7;
	$b = 3;
	echo $a % $b;
	echo '<br>';
	$c = 7;
	$d = 7.15;
	var_dump (floor($c + $d));
	echo '<br>';
	var_dump (sqrt ('25'));
	echo '<br>';
	var_dump (substr('Десять негритят пошли купаться в море', 41,-12));
	echo '<br>';
	var_dump (substr('Десять негритят пошли купаться в море', 17,-50));
	echo '<br>';
	$str='Десять негритят пошли купаться в море';
     $str=mb_convert_case($str,MB_CASE_TITLE,'UTF-8');
	 var_dump ($str);
	echo '<br>';
	$str = 'Десять негритят пошли купаться в море';
		var_dump (strlen($str));
	echo '<br>';
	$true = 1;
	$false = 0;
	var_dump(true == 1);
	echo '<br>';
	$true = 1;
	$false = 0;
	var_dump(false === 0);
	echo '<br>';
	$str = three;
	$str1 = три;
	if ( $str > $str1 ) {
	echo 'three';
	}
	if ( $str < $str1 ) {
	echo 'три';
	}
	echo '<br>';
	$a = 125 * 13 + 7;
	$b = 223 + 28 * 2;
	if ( $a > $b ) {
	echo 'Первое математическое действие больше';
	}
	if ( $a < $b ) {
	echo 'Второе математическое действие больше';
	}
	?>
	
	
	
	
	 
	
	


