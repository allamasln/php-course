<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones</title>
</head>
<body>
	<?php

	/*
		En PHP se pueden pasar parametros a funciones por valor y por referencia:
		


	*/
		//Cuando se pasa un parametro por valor una vez dentro de la función este valor queda guardado en una variable que está completamente encapsulada dentro de la función no afectando a nada de fuera del programa 
		function incrementa($valor1) {
			return ++$valor1;
		}

		$numero = 2;

		echo incrementa($numero) . "<br>";
		echo $numero;

		echo "<br><br>";


		// Cuando se pasa un parametro por referencia ademas de añadir delante del parametro & en la declaración de la función esto implica que se crea un vinculo entre esta variable que guarda el valor dentro de la variable y la variable pasada como parametro en la llamada de la función de tal forma que los cambios que se porducen en el interior de la función afectan al valor de esta variable fuera de la función cuando siga ejecutando el programa segun el flujo despues de la llamada. 
		function incrementa2(&$valor1) {
			return ++$valor1;
		}

		$numero = 2;

		echo incrementa2($numero) . "<br>";
		echo $numero;

		/*
			NOTA:
			Cuesta hacerse una idea de cuando pasar un valor por referencia pero puede ser util si se encesita que una función configure algunos valores del programa 
			
		*/
	?>
	
</body>
</html>