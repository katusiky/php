<?php  

	// si los operadores son colocados despues de la variable el cambio afectara a la proxima llamada de la variable si se colocan antes se efectuara en el mismo momento de la llamada

	$variable = 3;

	echo $variable++;
	echo '<br>';
	echo $variable;
	echo '<br>';
	echo --$variable;
	echo '<br>';
	echo $variable;

?>