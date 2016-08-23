<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Constantes</title>
</head>
<body>
	<?php

		/*
	
		Definición: Espacio en al memoria del ordenador donde se almacenará un valor que no podrá cambiar 	durante la ejecución del programa. 	
		
		Sintaxis:
		define("NOMBRE_CONSTANTE", Valor);
		
		Aspectos a tener en cuenta con las constantes:

			- El nombre de las constantes ha de ir en mayúsculas (convenio)
			- El nombre de las constantes no deben llevar el simbolo $
			- Es obligatorio el uso de la función define() para definir constantes
			- El ámbito de una constante por defecto es global
			- Las constantes no se pueden redefinir.
			- Las constantes solo pueden almacenar valores escalares. Es decir que no se puede divir en partes más pequeñas. Puede almacenar Enteros, String, Booleanos, pero no puede almacenar por ejemplo Arrays. 
			
		*/


			define("AUTOR", "Antonio");

			echo "El autor es: AUTOR"; // Con las constantes no podemos combinar dentro de comillas dobles tipos de datos como si podiamos con variables

			echo "<br>";
			echo "El autor es: " . AUTOR;
			echo "<br>";
			echo "El autor es: " . autor;


			/*

			NOTA:

			La función define admite un tercer parámetro opciónal. Se le puede pasar un valor voleano para indicar si queremos que el nombre de las constantes sea sensible o no lo sea a mayusculas o minusculas aunque por convenio el nombre de las constantes debe ir en mayusculas PHP nos lo permite con este tercer parametro. 

			define("NOMBRE_CONSTANTE", Valor, Boolean);
			
			*/

			define("PI", 3.1416, 1);

			echo "<br>";
			echo "El autor es: " . PI;
			echo "<br>";
			echo "El autor es: " . pi;


			// No podemos redefinir constantes si lo intentamos PHP lanzara un error (notice)
			
			define("AUTOR", "Pedro");

			echo "<br>";
			echo "El autor es: " . AUTOR;

			// Pero si definimos la constante con el mismo nombre pasandole 1 en el tercer parametro opcional, entonces PHP ya sabe interpretar a cual nos referimos si ponemos mayusculas o minusculas y las trata como constantes distintas. 

			define("AUTOR", "María", 1);

			echo "<br>";
			echo "El autor es: " . AUTOR;
			echo "<br>";
			echo "El autor es: " . autor;

			/* 

			En PHP hay muchas constantes predefinidas que podemos usar libremente. Por ejemplo:
			__LINE__	El número de línea actual en el fichero.
			__FILE__	Ruta completa y nombre del fichero con enlaces simbólicos resueltos. Si se usa dentro de un include, devolverá el nombre del fichero incluido.
			__DIR__	Directorio del fichero. Si se utiliza dentro de un include, devolverá el directorio del fichero incluído. Esta constante es igual que dirname(__FILE__). El nombre del directorio no lleva la barra final a no ser que esté en el directorio root.
			__FUNCTION__	Nombre de la función.
			__CLASS__	Nombre de la clase. El nombre de la clase incluye el namespace declarado en (p.e.j. Foo\Bar). Tenga en cuenta que a partir de PHP 5.4 __CLASS__ también funciona con traits. Cuando es usado en un método trait, __CLASS__ es el nombre de la clase del trait que está siendo utilizado.
			__TRAIT__	El nombre del trait. El nombre del trait incluye el espacio de nombres en el que fue declarado (p.e.j. Foo\Bar).
			__METHOD__	Nombre del método de la clase.
			__NAMESPACE__	Nombre del espacio de nombres actual.
		
			*/
			echo "<br>";
			echo "La linea de esta instrucción es: " . __LINE__ . "<br>";
			echo "Estamos trabajando con este fichero: " . __FILE__;
			

	?>
</body>
</html>