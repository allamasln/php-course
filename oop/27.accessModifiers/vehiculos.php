<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clases</title>
</head>
<body>
	<?php
	/*
		Los metodos setter sirven para modificar las propiedades de un objeto
		Los metodos getters sirven para ver las propiedades de un objeto. 


	*/

		class Coche {
			

			// private $ruedas;
			protected $ruedas;
			
			// public es el modificador por defecto en php da igual ponerlo o no ponerlo pero se podría poner
			public $color;
			
			protected $motor;


			function Coche() {
				
				$this->ruedas = 4;
				$this->color = "";
				$this->motor = 1600;


			}
			function getRuedas(){
				return $this->ruedas; // Podemos acceder desde aqui porque a pesar de estar encapsulada nos encontramos en la propia clase. 
			}

			function getMotor(){
				return $this->motor;
			}


			// Un método es una función dentro de una clase
			function arrancar() {
				echo "Estoy arrancando... <br>";
			}

			function girar() {
				echo "Estoy girando... <br>";
			}

			function frenar() {
				echo "Estoy frenando... <br>";
			}

			function setColor($color_coche, $nombre_coche) {
				$this->color = $color_coche;
				echo "El color del " . $nombre_coche . " es " . $this->color . "<br>";
			} 

		}


		class Camion extends Coche {

			
			function Camion() {
				
				$this->ruedas = 8;
				$this->color = "Gris";
				$this->motor = 2600;

			}

			// Esto seria un metodo setter
			function setColor($color_camion, $nombre_camion) {
				$this->color = $color_camion;
				echo "El color del " . $nombre_camion . " es " . $this->color . "<br>";
			}

			function arrancar() {
				parent::arrancar();

				echo "Camión arrancado";
			}
		}

	?>


</body>
</html>