<?php 
	
	include("connection.php");

	if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['pw']) && !empty($_POST['pw'])
		) {
		
		$name = $_POST[name];
		$usrpw = $_POST[pw];

		$con = mysql_connect($host,$user,$pw)or die('problemas al conectar');
		mysql_select_db($db,$con)or die('problemas al conectar');

		mysql_query("INSERT INTO codigof (name,pw) VALUES ('$name', '$usrpw')",$con);
		echo "Se ha insertado correctamente";
	}else{
		echo 'Problemas al insertar';
	}

 ?>