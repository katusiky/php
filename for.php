<?php 

	$names = array('jose', 'cristina', 'francis', 'brian', 'nilson');

	/*
	for ($i=0; $i < sizeof($names); $i++) { 
		print "yo soy ".$names[$i].'<br>';
	};
	*/

	for ($i=(sizeof($names)-1); $i >= 0; $i--) { 
		print "yo soy ".$names[$i].'<br>';
	};

 ?>