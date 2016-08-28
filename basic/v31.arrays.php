<?php


		
		$semana[] = "Lunes";
		$semana[] = "Martes";
		$semana[] = "Miércoles";

		$datos = array("Nombre" => "Antonio","Apellido"=>"Llamas","Edad"=>28);

		echo $datos["Apellido"] . "<br>"; 

		// $datos = "Martín"; // Importante no repetir nombres para evitar sobrescribir
		// Con la función is_array se comprueba si un nombre corresponde a un array o a una variable. Devuelve un booleano

		echo "<br>";
		echo is_array($datos) ? "Es un array<br>" : "No es un array<br>";

		// RECORRER ARRAYS 


		// RECORRER elementos de un array asociativo con el bucle foreach
		// $datos es el nombre del array y $clave y $valor son nombres que decido en el parentesis del array para referirnos a la clave y al valor en cada posición. 
		
		echo "<br>";
		foreach($datos as $clave=>$valor) {
			echo "A $clave le corresponde $valor <br>";
		}

		// RECORRER elementos de un array asociativo con el bucle for

		echo "<br>";
		for ($i=0; $i<3; $i++) {
			echo $semana[$i] . "<br>";
		}

		// Cuanto no sepamos cuantas posiciones tiene el array podemos usar la función count() que cuenta los elementos que tiene un array
		
		echo "<br>";
		for ($i=0; $i< count($semana); $i++) {
			echo $semana[$i] . "<br>";
		}

		// De esta forma agregamos un elemento a un array en la última posicion de este
		$semana[] = "Jueves";

		echo "<br>";
		for ($i=0; $i< count($semana); $i++) {
			echo $semana[$i] . "<br>";
		}

		// Si se trata de un array asociativo podemos agregar un elemento de la siguiente forma: 

		echo "<br>";
		$datos["Pais"]  ="España";
		foreach($datos as $clave=>$valor) {
			echo "A $clave le corresponde $valor <br>";
		}

		// ORDENAR ARRAYS por orden alfabético
		// Utilizamos la funcion sort() para esto

		sort($semana);
		
		echo "<br>";
		for ($i=0; $i< count($semana); $i++) {
			echo $semana[$i] . "<br>";
		}



		
?>