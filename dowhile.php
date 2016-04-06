<?php 
	
	$names = array('jose', 'cristina', 'francis', 'brian', 'nilson');
	$number = 0;
	do {
		echo "hola ".$names[$number].'<br>';
		$number++;
	}while ($number > (sizeof($names)-1));
 ?>