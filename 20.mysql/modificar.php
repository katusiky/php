<?php 

	include('connection.php');


		$con = mysql_connect($host,$user,$pw)
		or die('problemas al conectar');

		mysql_select_db($db,$con)
		or die('problemas al conectar');

		$registers = mysql_query("UPDATE codigof set USER='$_POST[new]' WHERE USER='$_POST[old]'",$con)
		or die('problemas en consulta'.mysql_error());

		echo 'Nombre actualizado';

 ?>