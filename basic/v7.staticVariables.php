<?php

	function incrementaVariable() {

		static $contador = 0;

		$contador++;

		echo $contador . "<br>";
	}

	incrementaVariable();
	incrementaVariable();

	incrementaVariable();
	incrementaVariable();

	/*

		Si no se declara una variable de una función como static en PHP cuando una función termina se destruye el valor de todas las variables locales de tal forma que cuando se vuelve a llamar a la función la variable contador en este caso no almacena el valor que ya tenía cuando termino la ejecución la vez anterior. Agregando static delante de la declaración de la variable conseguimos que esta linea (donde escribimos static) solo se ejecute la primera vez que se llama a la función y lo segundo que se consigue es que cuando finaliza la ejecución de una función la variable static conserva su valor para cuando la vuelvan a llamar. 

	*/
		
?>