<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");

	
	// vemos que ahora si esta encapsulada y no permite modificar esta propiedad desde fuera de la clase. 
	// Compra_vehiculo::$ayuda=10000;

	// De esta forma hemos conseguido que este metodo se ejecute y se aplique la ayuda a todos los compradores que estén creados a continuación
	Compra_vehiculo::descuento_gobierno();

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