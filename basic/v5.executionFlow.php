<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lección 5: Flujo de ejecución</title>
</head>
<body>

	<?php

		// En php podemos tener varios bloques de codigo PHP
		
		include("v5.fn.dameDatos.php");
		/* 
			Include y require ejecuta el codigo de archivos externos en el lugar donde se usen durante el flujo de la aplicación como si estuviese el código en esa posición. La diferencia entre ambas es que include si no encuentra el archivo que se le pasa como parametro, aunque muestra los errores pertinentes, sigue con la ejecución del programa mientras que con require obligamos al programa a que no ejecute nada mas si no encuentra el archivo que se está pidiendo, es decir, que ese archivo es requerido para poder ejecutar el resto del programa. También se utiliza include_once y require_once que funcionan de la misma manera con el matiz de que si el código ha sido ya incluido no se volverá a incluir. 
		*/


	?>

	<?php

		/* 

			El flujo de ejecución de un lenguaje de programación indica el orden en el que se ejecutan las instrucciones del programa. 

			En PHP el flujo de ejecución siempre va de arriba abajo 
		
		*/

		echo "este es el primer mensaje <br>"; // Lo primero que veremos
		dameDatos();
		echo "este es el segundo mensaje <br>"; // Lo segundo que veremos
		dameDatos();

			/*
				NOTA:
					- En principio parece obvio pero es importante tenerlo presente, sobretodo cuando entran en juego estructuras de control que interrumpen el flujo del programa. (Condicionales, bucles, funciones)
			*/

	?>
</body>
</html>

