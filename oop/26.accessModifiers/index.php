<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clases</title>
</head>
<body>
	
	<?php
		include("vehiculos.php");

		$clio = new Coche();
		$master = new Camion();
		//$clio->ruedas = 9; // Esto no tendría ningun sentido y tenemos que evitar que cualquier desarrollador lo haga. un coche solo puede tener 4 ruedes ahora y siempre. Para ello hay que encapsular esta propiedad (private)

		// Vemos que al encapsular ruedas ya está encapsulada y no se puede acceder a la propiedad privada ruedas. Si yo quiero acceder a la propiedad reudas para poder imprimirlas como estoy haciendo en la linea de abajo ya no puedo hacerlo para esto existen los métodos getters y setters. 
		echo "El clio tiene " . $clio->ruedas . " ruedas <br>";
		echo "La master tiene " . $master->ruedas . " ruedas <br>"; 
	
	?>

</body>
</html>