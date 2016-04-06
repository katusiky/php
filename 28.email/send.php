<?php 

	if (isset($_POST['message']) && !empty($_POST['message']) && isset($_POST['asunto']) && !empty($_POST['asunto'])) {
		
		$destino= "josedeleon.ka@gmail.com";
		$desde = "From: "."CF";
		$asunto = $_POST['asunto'];
		$mensaje = $_POST['mensaje'];

		mail($destino, $asunto, $mensaje, $desde);

		echo "El correo ha sido enviado exitosamente...";
	}else{
		echo "Debes llenar todos los campos";
	}

 ?>