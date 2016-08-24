<?php
	/*
		En PHP existe lo que se llama como casting (cambio de tipo) implicito, es diferente a otros lenguajes y resulta mas facil. 

		En PHP cuando se asigna un valor a una variable no hay que especificar el tipo de la variable lo descubre PHP ya automaticamente en funcion del tipo de dato le metas. 



	*/

	$num = "5";
	$num+=2; // Vemos que aqui PHP ha convertido implicitamente la variable num de string a entero
	$num+=5.75; // Ahora ha realizado el casting también de forma implicita $num ya no es una variable de tipo entero ahora lo es de tipo float
	echo "El número es : " . $num;


	// También en algunos casos estas obligado a realizar un casting explicito. Por ejemplo:

	echo "<br>";
	$num1 = "5";
	$resultado = $num1; // De esta forma $resultado es de tipo strimg si quiero forzar a que sea un numero siempre que el valor de $num1 se pueda convertir se puede hacer colocando (int) delante.
	echo gettype($resultado) . "<br>";
	$resultado = (int)$num1; // Ahora resultado es de tipo numérico

	echo gettype($num1) . "<br>";
	echo gettype($resultado) . "<br>";


?>