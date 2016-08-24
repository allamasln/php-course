<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones</title>
</head>
<body>
	<?php

		// Podemos usar o llamar funciones predefinidas de esta forma:
		$palabra = "ANTONIO";
		echo (strtolower($palabra)); // Una función no hace su trabajo hasta ser llamada

		// Podemos construir funciones propias

		function suma($num1, $num2) {
			$result = $num1 + $num2;

			return $result; // Con return indicamos que valor devuelve la función
		}

		echo "<br>" . suma(3,4); // Llamada a función propia

		echo "<br><br>";

		// PHP permite definir un PARAMETRO POR DEFECTO. No todos los lenguajes de programación permiten pasar parametros por defecto. Esto es un parametro que si no se indica tiene un valor por defecto.

		// Función que se enecargue de pasar de mayusculas a minusculas y convierta la primera letra de la primera en mayuscula.

		function frase_mayus($frase, $conversion = true) {
			$frase = strtolower($frase);

			// if($conversion == true) {

			// }
			// En php la condición $conversion == true se puede expresar como $conversion

			if($conversion) {
				$result = ucwords($frase[0]) . substr($frase, 1);
			} else {
				$result = strtoupper($frase);
			}

			return $result;
		}
	
		echo(frase_mayus("esto es una prueba"));
		echo "<br>";
		echo(frase_mayus("esto es una prueba", false));
	?>
	
</body>
</html>