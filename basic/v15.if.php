<?php
	/*

		OPERADORES LÓGICOS

		&&  Y lógico
		AND Y lógico
		||  O lógico
		OR  O lógico
		XOR O exclusivo
		!  NEGACION

	
		PRIORIDAD O PRECEDENCIA DE OPERADORES

		sociatividad 	Operadores 	Información adicional
		no asociativo 	clone new 	clone and new
		izquierda 		[ 	array()
		derecha 		** 	aritmética
		derecha 		++ -- ~ (int) (float) (string) (array) (object) (bool) @ 				 tipos e incremento/decremento
		no asociativo 	instanceof 	tipos
		derecha 		! 	lógico
		izquierda 		* / % 	aritmética
		izquierda 		+ - . 	aritmética y string
		izquierda 		<< >> 	bit a bit
		no asociativo 	< <= > >= 	comparación
		no asociativo 	== != === !== <> <=> 	comparación
		izquierda 		& 	bit a bit y referencias
		izquierda 		^ 	bit a bit
		izquierda 		| 	bit a bit
		izquierda 		&& 	lógico
		izquierda 		|| 	lógico
		derecha 		?? 	comparación
		izquierda 		? : 	ternario
		derecha 		= += -= *= **= /= .= %= &= |= ^= <<= >>= 	asignación
		izquierda 		and 	lógico
		izquierda 		xor 	lógico
		izquierda 		or 	lógico
	

	NOTA: CUANTO MAS ARRIBA MAS PRIORIDAD
	Por ejemplo && (y lógico) es más prioritario que AND (y lógico tb)
	*/

	$var1 = true;
	$var2 = false;

	$result = $var1 && $var2; // Se tienen que dar las dos expresiones true y una es false

	echo ($result) ? "Correcto" : "Incorrecto";

	echo "<br>";
	// Si hacemos la misma prueba con el operador Y lógico AND
	$result = $var1 AND $var2; // Nos da correcto porque el operador de asignación = es prioritario al operador lógico AND

	echo ($result) ? "Correcto" : "Incorrecto";

?>