<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Strings</title>
	<style>
		.resaltar {
			color: #F00;
			font-weight: bold;
		}
	</style>

</head>

<body>
	<?php

		$name = "Antonio";

		echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";

		// Cuando se necesita incluir una comilla hija dentro de una padre hasy que utilizar distintos tipos, combinando entre simples y dobles


		echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";

		// Otra opción es escapar el caracter comillas dentro del string, el operador para escapar es la barra invertida.

		echo "Hola $name <br>";

		// Esto es posible en PHP siempre que se usen comillas dobles, para evitar tener que usar el operador de concatenación. 

		$variable1 = "Casa";
		$variable2 = "CASA";
		$resultado = strcasecmp($variable1, $variable2);

		echo $resultado . "<br>";

		/* Dos funciones para comparar strings:

		- strcmp(); Compara valores de tipo string teniendo en cuenta mayusculas y minisculas
		- strcasecmp(); Compara dos string ignorando mayusculas y minusculas

		 Ambas devuelven 0 si coinciden y un numero distinto a cero si no coinciden. 

		*/

		 if (!$resultado) {
		 	echo "Coinciden";
		 } else {
		 	echo "No coinciden";
		 }

		 // Como el valor devuelto de estas funciones no es intuitivo ya que devuelve un numero (true) en caso negativo y 0 (false) en caso positivo podemos darle la vuelta al if para hacerlo más intutitivo utilizando el operador de negación (!)
	?>
</body>
</html>