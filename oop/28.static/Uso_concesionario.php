<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");

	// Ve esta forma vemos como esta funcionando la propiedad estatica y vemos como es comun para los dos objetos a la hora de aplicar el descuento. Pero esto vistos los proncipios de la poo no es del todo correcto ya que la propiedad ayuda no está encapsulada y desde fuera cualquiera podría cambiar su valor. Vamos a verlo con un ejemplo

	// Como esta propiedad no pertenece a ningun objeto no podemos hacer referencia a ningun objeto sino a la propia clase Compra_vehiculo::$ayuda
	// Vemos como hacerlo correctamente en la siguiente lección. 

	Compra_vehiculo::$ayuda=10000;

	
	$compraAntonio = new Compra_vehiculo("compacto");

	$compraAntonio->climatizador();

	$compraAntonio->tapiceria_cuero("blanco");
	
	echo $compraAntonio->precio_final() . "<br>";
	
	$compraAna = new Compra_vehiculo("compacto");

	$compraAna->climatizador();

	$compraAna->tapiceria_cuero("rojo");

	echo $compraAna->precio_final();

	/*
	NOTA: 

	Cada uno de los dos objetos compraAntonio y compraAna tienen su copia de los metodos que se comportan de distinta manera en un objeto u otro. 
	Con los métodos o variables estaticas conseguimos que ya los objetos no tenan cada uno una copia del mismo ahora pertenecen a la clase y se comportan de la misma manera para todos los objetos. 	
	*/
	
	


?>
</body>
</html>