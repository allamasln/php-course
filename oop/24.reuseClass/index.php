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

		echo "El clio tiene " . $clio->ruedas . " ruedas <br>";

		echo "La master tiene " . $master->ruedas . " ruedas <br>";

	?>

</body>
</html>