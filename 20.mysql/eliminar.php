<?php 

	include('connection.php');


		$con = mysql_connect($host,$user,$pw)
		or die('problemas al conectar');

		mysql_select_db($db,$con)
		or die('problemas al conectar');

		$registers = mysql_query("SELECT ID FROM codigof WHERE NAME='$_POST[name]'",$con)
		or die('problemas en consulta'.mysql_error());

		if ($re=mysql_fetch_array($registers)) {
			mysql_query("DELETE FROM codigof WHERE NAME = '$_POST[name]'",$con);
			echo "datos eliminados";
		}else{
			echo 'Los datos no han sido eliminados';
		}

 ?>