<?php 

	$fi = fopen("nuevoarchivo.txt","a")
	or die("Unable to open file!");

	fwrite($fi, "Datos: "."\n");
	fwrite($fi, $_POST['name']."\n");
	fwrite($fi, $_POST['comment']."\n");
	fwrite($fi, "------------------------------ \n\n");
	fclose($fi);
	echo 'Archivo Guardado';

 ?>