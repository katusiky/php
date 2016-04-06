<?php 

	$path = "files/";
	opendir($path);
	$destino = $$path.$_FILES['file']['name'];
	copy($_FILES['file']['tmp_name'],$_FILES['file']['name']);
	echo 'Archivo subido exitosamente';
	$name = $_FILES['file']['name'];
	echo "<img src=\"files/$name\"><br>";
	echo $_FILES['file']['name']."<br>";
	echo $_FILES['file']['size']." Bytes <br>";
	echo $_FILES['file']['type']."<br>";

 ?>