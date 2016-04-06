<?php 

	$archivo = fopen("nuevoarchivo.txt", 'r')
	or die('problema al abrir archivo');

	while (!feof($archivo)) {
		$get = fgets($archivo); 
		$underline = nl2br($get); // "nl2br" leer salto de linea
		echo $underline;
	}

 ?>