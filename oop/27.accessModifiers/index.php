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

		

		//echo "El clio tiene " . $clio->ruedas . " ruedas <br>";
		echo  "El Clio tiene " . $clio->getRuedas() . " ruedas <br>";
		
		// tan solo permitimos a los programadores que accedan a estas propiedaes utilizando el canal adecuado. Ya no pueden modificar las ruedas que tiene un coche 

		// Vemos que no nos dice de esta forma las ruedas que tiene un camion. Esto es porque estamos heredando de coche pero sus propiedades encapsuladas nos on accesibls desde las clases herederas, para eso esta el protected. 
		echo  "La Master tiene " . $master->getRuedas() . " ruedas <br>";
		echo "El Clio tiene un motor de " . $clio->getMotor() . " cc.<br>";
		echo $master->ruedas; // Sigue sin ser accesible con protected desde fuera solo desde la propia clase coche o herederas. 
		
	?>

</body>
</html>