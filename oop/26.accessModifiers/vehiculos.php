<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clases</title>
</head>
<body>
	<?php


		class Coche {
			
			private $ruedas;
			
			var $color;
			
			var $motor;


			function Coche() {
				
				$this->ruedas = 4;
				$this->color = "";
				$this->motor = 1600;


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