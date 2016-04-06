<?php  

	include("connection.php");

	if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['pw']) && !empty($_POST['pw']) && isset($_POST['pw2']) && !empty($_POST['pw2']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['user']) && !empty($_POST['user']) && $_POST['pw'] == $_POST['pw2'] ) {
		
		$name = $_POST[name];
		$usr = $_POST[user];
		$email = $_POST[email];
		$usrpw = $_POST[pw];

		$con = mysql_connect($host,$user,$pw)or die('problemas al conectar');

		mysql_select_db($db,$con)or die('problemas al seleccionar');

		mysql_query("INSERT INTO register (name,pw,email,user) VALUES ('$name', '$usrpw', '$email', '$usr')",$con);
		echo "Se ha registrado correctamente"."<br>";

		echo $name."<br>";
		echo $email."<br>";
		echo $usr."<br>";
		echo $usrpw."<br>";
	}else{
		echo 'Verifica que llenaste los campos correctamente';
	}

?>