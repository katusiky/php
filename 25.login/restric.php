<?php 

	session_start();
	if (isset($_SESSION['username'])) {
		echo 'Bienvenido '.$_SESSION['username']."<br>";
		echo "<br><a href=destroy.php>Cerrar Session</a>";
	}else{
		echo 'Necesitas iniciar sesion para ver esta pagina';
	}

 ?>