<?php
	
	/*
		Definición: Es como una gran variable donde en vez de almacenar un único valor podemos almacenar varios valores.

		Tipos:

		Arrays indexados: Aquellos que utilizan indices númericos para acceder o referirnos a cada valor. Empiezan a numerarse en su primera posición con un índice 0. 

		Arrays asociativos: El concepto es el mismo pero para referirnos a cada una de las posiciones en lugar utilizar indices numéricos se utilizan nombres. Los nombres que queramos. 		

	*/
		// ARRAYS INDEXADOS


		// Así podemos crear un array indexado
		// En PHP no hace falta indicar el indice de esta manera los va almacenando despues de la ultima poscición del array. 

		$semana[] = "Lunes";
		$semana[] = "Martes";
		$semana[] = "Miércoles";

		echo $semana[1] . "<br>";

		// Otra sintaxis para crear arrays

		$puntuaciones = array(10, 15, 25);

		echo $puntuaciones[1] . "<br>";

		// ARRAYS ASOCIATIVOS
		// Así podemos crear arrays asociativos
		// Se utiliza este operador flecha => para asociar un indice con un valor
		// No confundir con el operador flecha -> para poo
		$datos = array("Nombre" => "Antonio","Apellido"=>"Llamas","Edad"=>28);

		echo $datos["Apellido"];

		$datos = "Martín";
		
?>