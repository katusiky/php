<?php 

	// el signo de "=" es el operador de asignacion 

	$valor = "hola";

	echo $valor;
	echo "<br>";

	// el signo "." es el operador de concatenacion y se puede  usar antes del igual o entre variables.

	$tengo = "yo "."tengo "." 18 anos";
	echo $tengo;
	echo "<br>";

	$tengo = "yo ";
	$tengo .= "tengo ";
	$tengo .= "18 anos";
	echo $tengo;

?>