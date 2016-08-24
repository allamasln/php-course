<?php

	// Existen muchas funciones predefinidas matemáticas en php que se pueden consultar en la documentación oficial de php. Usaremos varios ejemplos:
	
	// Vemos en la referencia oficial que rand que devuelve numeros aleatorios tiene dos descripciones.
	// Sin parametros rand(void);
	$num = rand();
	echo $num;
	// Delimitando entre parametros el rango númerico en el que queremos que genere este número aleatorio.

	echo "<br>";
	$num = rand(1,10);
	echo $num;

	echo "<br>";
	$num = 5.25;
	echo "El numero $num redondeado es: " . round($num);

	echo "<br>";
	$num = 5.55;
	echo "El numero $num redondeado es: " . round($num);

	/*
		NOTA: En la referencia oficial de PHP vemos como algunas funciones no tienen admiten parametros, requieren parametros obligatorios u opcionales por la descripción.

		int rand ( void )  
		void quiere decir que no admite parametro

		float round ( float $val [, int $precision = 0 [, int $mode = PHP_ROUND_HALF_UP ]] )
		Vemos que la función round admite 3 parametros 1 obligatorio float $val que está sin corchetes y los otros dos que estan entre corchetes son opcionales. 

		Por ejemplo el segundo parametro debe ser un entero y es para precisar el número de decimales que queramos en el número redondeado. Ejemplo:

	*/
	echo "<br>";
	echo "El numero $num redondeado a un decimal es: " . round($num, 1);
?>