<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bucle while</title>
</head>
<body>
	<?php
		// Bucle determinado for (iniciacióon bucle; condición del bucle; incremento/decremento bucle);

		for($i=0; $i<=10; $i++) {
			echo "Iteración " . ($i + 1) . "<br>";

			// Es posible salir de un bucle antes de que termine su ejecución con break;

			if($i==6) {
				echo "Bucle interrumpido.";
				break;
			}
		}

		// Este bucle podemos configurarlo como queramos con los parametros indicados. 

		// Podemos impedir que una iteracción no se ejecute
		echo "<br>";
		echo "<br>";
		
		// Tabla del 9
		for ($i=0; $i<=10; $i++) {
			echo "9 * $i = " . 9*$i . "<br>";
		}

		echo "<br>";
		// Tabla de divisiones
		for ($i=10; $i>= -10; $i--) {

			if ($i == 0) {
				echo "La división por 0 no es posible <br>";
				continue;
			}
			echo "9 / $i = " . 9/$i . "<br>";

			// No se puede dividir por cero y en este caso php nos marca un error.
			// Podemos impedir que una iteracción no se ejecute con un if y continue;


		}
		echo "<br><br>";
		// Podemos hacer un bucle doble por ejemplo podríamos hacer una tabla de multiplicar completa de la siguiente forma

		for ($i=0; $i<=10; $i++) {
			for($j = 0; $j<=10; $j++) {
				echo "$i * $j = " . $i*$j . "<br>";
			}
			echo "<br><br>";
		}

	?>
</body>
</html>