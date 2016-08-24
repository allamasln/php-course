<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bucle while</title>
</head>
<body>
	<?php

		// While es un bucle indeterminado que iterará tantas veces mientras la condición sea cierta.
		$var1 = 1;

		while ($var1 < 6) {
			echo "Iteración " . $var1 . ": Estamos ejecutando el código del bucle <br>";

			$var1++;
		}

		echo "Hemos salido del bucle.";

		/*
		NOTA:

		Precaución de no dar lugar a bucles infinitos es decir que la condición de while nunca pase a ser false

		*/

		// un bucle do while si diferencia del while en que siempre hace una iteración como mínimo aunque la condición sea falsa. 
		echo "<br><br>";
		$var1 = 4;
		$cont = 1;
		do {
			echo "Iteración " . $cont . ": Estamos ejecutando el código del bucle <br>";

			$var1++;
			$cont++;
		} while ($var1 < 6);

		echo "<br><br>";
		$var1 = 10; // No entra dentro de la condición del bucle aun así ejecutará las sentencias del do una vez. 
		$cont = 1;
		do {
			echo "Iteración " . $cont . ": Estamos ejecutando el código del bucle <br>";

			$var1++;
			$cont++;
		} while ($var1 < 6);

	?>
</body>
</html>