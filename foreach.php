<?php 

	$names = array('jose', 'cristina', 'francis', 'brian', 'nilson');
	
	foreach ($names as $elem) {
		echo $elem.'<br>';
	};

	$arrayp = array('1' => 'elem1', '2' => 'elem2');

	foreach ($arrayp as $key => $value) {
		echo $key.' = '.$value.'<br>';
	}
 ?>