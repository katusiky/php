<?php  
	
	session_start();
	include("connection.php");

	if (isset($_POST['pw']) && !empty($_POST['pw']) && isset($_POST['user']) && !empty($_POST['user'])) {
		
		$usr = $_POST[user];
		$usrpw = $_POST[pw];

		$con = mysql_connect($host,$user,$pw)or die('problemas al conectar');

		mysql_select_db($db,$con)or die('problemas con BD');

		$sel=mysql_query("SELECT USER,PW FROM register  WHERE USER='$usr'",$con);

		$session= mysql_fetch_array($sel);

		if ($usrpw == $session['PW']) {
			$_SESSION['username'] = $usr;
			echo "Has iniciado sesion correctamente";
		}else{
			echo 'contraseña inválida';
		};

	}else{
		echo 'Verifica que llenaste los campos correctamente';
	}

?>