<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clases</title>
</head>
<body>
	
	<?php
// Así se crea una clase aunque no hemos definido todavía nada
		// Esta clase se encargará de construir instancias de coche o tipos de coche
		// En esta clase tendremos que definir las características comunes de los objetos de tipo coche 

		class Coche {
			
			var $ruedas; // Así se declaran los atributos de una clase
			
			var $color;
			
			var $motor;

			// El constructor de una clase es el metodo que se encarga de construir los objetos de esta clase y definir su estado inicial. Se hace creando un metodo con el mismo nombre que la clase. 

			function Coche() {
				// Utilizamos la palabra this dentro de una clase para referirnos a la propia clase
				// $this es como poner Coche
				// con -> referenciamos una propiedad o un metodo de la clase
				$this->ruedas = 4;
				$this->color = ""; // Color sin definir
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

			// Creando metodos con parametro 
			// Este metodo configurara el color de la clase coche

			function setColor($color_coche, $nombre_coche) {
				$this->color = $color_coche;
				echo "El color del " . $nombre_coche . " es " . $this->color . "<br>";
			} 

		}

		// Dentro de un código php podemos crear todas las clases que queramos
		//


		class Camion {
			
			var $ruedas;
			
			var $color;
			
			var $motor;


			function Camion() {
				
				$this->ruedas = 8;
				$this->color = "Gris";
				$this->motor = 2600;


			}
			function arrancar() {
				echo "Estoy arrancando... <br>";
			}

			function girar() {
				echo "Estoy girando... <br>";
			}

			function frenar() {
				echo "Estoy frenando... <br>";
			}

		}

	?>

</body>
</html>