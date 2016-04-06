<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>

<form action="proc.php" method="post" name="calc">
	<label> Coloque los valores: <br><br>
	<input type="text" name='c1'></input><br><br>	
	<input type="text" name='c2'></input><br><br>
	</label>
	<label>Selecciona el tipo de operacion: <br>
		<select name="list">
			<option value='suma'>Sumar</option>
			<option value='resta'>Restar</option>
			<option value='multiplicar'>Multiplicar</option>
			<option value='dividir'>Dividir</option>
		</select>
	</label>
	<br> <input type="submit" name="send" value="Resultado"></input>
</form>

</body>
</html>