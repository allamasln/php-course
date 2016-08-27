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

		
		/*

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
			

		
		*/

		//Mejor que copiar y pegar clase para reutilizar podemos heredar las propiedades y metodos de la clase coche
		// Con la palabra reservada extends construimos la herencia

		class Camion extends Coche {

			// Escribimos el constructor a mano ya que es diferente y define otro estado inicial
			function Camion() {
				
				$this->ruedas = 8;
				$this->color = "Gris";
				$this->motor = 2600;

			}

			// Ahora la Clase Camion tiene todos los metodos y propiedades de la clase coche 

			// Al heredar todo también tenemos el metodo setColor que lo habiamos eliminado en la clase camion porque estaba configurado con especificaciones para la clase coche que no son aplicables a un camio. Esto puede ser un problema ya que desde los objetos de camion ahora podremos acceder a este metedo. Esto podemos solucionarlo con la sobreescritura de metodos que es una caracteristica de la herencia. Para hacerlo volvemos a definir el metodo con el mismo nombre. 

			function setColor($color_camion, $nombre_camion) {
				$this->color = $color_camion;
				echo "El color del " . $nombre_camion . " es " . $this->color . "<br>";
			}

			// Podemos utilizar la instrucción parent para llamar la metodo de la clase padre y cuando sobreescribimos un metodo usar el código que ya tenga este metodo de la clase padre. Es decir se utiliza para añadir codigo a la clase padre.

			function arrancar() {
				parent::arrancar(); // Con esta linea le decimos al código que en este metodo lo primero que tiene que hacer es ejecutar todo el metodo de la clase padre. Eso se consigue con el operador ::

				echo "Camión arrancado";
			}
		}



/*
	NOTA:

	En este ejemplo Coche seria la super clase o clase padre de Camion y Camion la clase hija o la subclase de Coche.


*/

	?>
	

</body>
</html>