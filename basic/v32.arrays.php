<?php

	// Otro tipo de array
	// ARRAYS MULTIDIMENSIONALES (arrays de arrays)

	$alimentos = array("frutas"=>array("tropical"=>"Kiwi",
									   "citrico"=>"Mandarina",
									   "otros"=>"Manzana"
									  ), 
					   "leche"=>array("animal"=>"Vaca",
									   "vegetal"=>"Coco"
									  ),  
					   "carne"=>array("vacuno"=>"Lomo",
									   "porcino"=>"Pata"
									  )
					  );


	// ["carne"] -> Primera dimensión del array
	// ["vacuno"] -> Nombre asociativo de la segunda dimensión
	echo $alimentos["carne"]["vacuno"] . "<br>";


	// PREFORMATEAR ARRAYS
	// Sirve al desarrollador para conocer que hay dentro de un array

	// Una forma
	echo var_dump($alimentos);

	// Otra forma

	echo "<br>";
	echo "<pre>";
	echo var_dump($alimentos);
	echo "</pre>";

	// Otra forma
	echo "<br>";

	echo "<pre>";
	print_r($alimentos);
	echo "</pre>";

	// RECORRER ARRAYS MULTIDIMENSIONALES
	// $clave_alim -> Nombre asociativo de la primera dimensión
	// $alim -> Nombre asociativo de la segunda dimensión (array)

	echo "<br>";
	foreach($alimentos as $clave_alim=>$alim) {
		echo "$clave_alim:";
		echo "<br>";
		while(list($clave,$valor)=each($alim)) {
			echo "$clave=$valor <br>";
		}
		echo "<br>";
	}

	// Para entender esta combinación de funciones con el bucle foreach vamos a ir paso por paso.

	// Se crean dos arrays uno numerico y otro asociativo

	$numeros = array(2,12,23);
	$animales = array("Reptiles"=>"Serpiente", "Anfibio"=>"Rana", "Mamifero"=>"Perro");

	// La función list declara una lista de variables que le pasamos por parametro a las que le asigna el valor que tenga el array (en este caso $numeros) en la posición en posición del array que coincida con la posición del parametro en la función list.

	// list() no es exactamente una función sino una construcción del lenguaje. 
	// Es por ello que la sintaxis es singular
	// list($par1, $par2 ..) = $array

	list($uno, $dos, $tres) = $numeros;

	// Es decir esto es equivalenta a hacer lo siguiente
	// Teniendo el array $numeros = array(2,12,23);
	// $uno = $numeros[0];
	// $dos = $numeros[1];
	// $tres = $numeros[2]; 
	// Vemos como las variables ya han sido declaradas y podemos hacer uso de ellas:

	echo $uno . "<br>";
	echo $dos . "<br>";
	echo $tres . "<br>";

	echo "<br>";

	// Ademas list funciona aunque no le pasemos tantos parametros como valores tenga un array. Si le pasamos dos parametros asignara los dos primeros valores.
	list($uno, $dos) = $numeros;
	echo $uno . "<br>";
	echo $dos . "<br>";

	echo "<br>";

	// También es posible pasarle paremtros vacios para saltarnos posiciones de un array. es decir si queremos solo almacenar la tercera lo haremos de la siguiente forma:
	list(,,$tres) = $numeros;

	echo $tres . "<br>";

	// La funcion list solo funciona para arrays indexados es decir indices numericos. Si la probamos con un array asociativo nos devolvera un error


	list(,,$tres) = $animales;

	echo $tres . "<br>"; // Da error


	// La función each devuelve el primer valor de un array utilizando las claves 0, 1, key y value. Despues de ejecutar esta función avanza el cursor del array en una posición. 


	$bar = each($animales);
	echo "<pre>";
	print_r($bar);
	echo "</pre>";

	// Como el cursor del array ha avanzado cuando ejecutamos de nuevo la función each sobre el mismo array aunque sigue teniendo las mismas posiciones la primera posicion para esta funcion es la siguiente a la anterior

	$bar = each($animales);
	echo "<pre>";
	print_r($bar);
	echo "</pre>";

	// Y si lo ejecutamos otra vez

	$bar = each($animales);
	echo "<pre>";
	print_r($bar);
	echo "</pre>";

	// Aunque el array que devuelve esta función no es puramente indexado ya que tiene indices asociativos, también los tiene númericos por lo tanto se puede listar con la función list. 

	list($key, $value) = $bar;

	echo "$key = $value <br>";

	echo "<br>";



	// como este array solo tiene 3 posiciones si volviesemos a utilizar la función each ya no devolvería nada es por ello que a la hora de recorrer con el bucle foreach el array multidimensional el while se corta cuando llega al fin del array

	list($key, $value) = each($animales);

	echo "$key = $value <br>";

	echo "<br>";

	// con la función reset() podemos resetear el cursor del array si tuviesemos necesidad de volver a recorrerlo

	reset($animales);

	// De esta forma vemos que si volvemos a ejecutar la función each vuelve a sacarnos la primera posición del array. 
	list($key, $value) = each($animales);

	echo "$key = $value <br>";

	echo "<br>";


?>