<?php 

	$file = $_POST['file'];

	unlink($file);
	echo 'El archivo ha sido eliminado exitosamente';

 ?>