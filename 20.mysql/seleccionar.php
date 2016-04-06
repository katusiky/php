<?php 

	include('connection.php');


		$con = mysql_connect($host,$user,$pw)
		or die('problemas al conectar');

		mysql_select_db($db,$con)
		or die('problemas al conectar');

		$registers = mysql_query("SELECT * FROM codigof WHERE NAME='$_POST[name]'",$con)
		or die('problemas en consulta'.mysql_error());

		while($reg=mysql_fetch_array($registers)) {
			echo $reg['name']."<br>";
			echo $reg['pw']."<br>";
		};

 ?>