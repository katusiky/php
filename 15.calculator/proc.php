<?php 

	$operation = $_POST['list'];
	if (isset($_POST['c1']) && !empty($_POST['c1']) && isset($_POST['c2']) && !empty($_POST['c2'])) {
		echo 'El resultado es: ';
		switch ($operation) {
			case 'suma':
				echo $_POST['c1'] + $_POST['c2'];
				break;
			case 'resta':
				echo $_POST['c1'] - $_POST['c2'];
				break;
			case 'multiplicar':
				echo $_POST['c1'] * $_POST['c2'];
				break;
			case 'dividir':
				echo $_POST['c1'] / $_POST['c2'];
				break;
			default: 
				echo 'No se ha podido realizar la operacion';
				break;
		};
	}else {
		echo 'Ningun campo puede quedar vacio';
	}

 ?>