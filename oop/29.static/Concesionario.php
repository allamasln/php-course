<?php

	class Compra_vehiculo{
		
		private $precio_base;
		
		// Una manera para no dejar manipular esta propiedad desde fuera de la clase es encapsularla

		// Esto funciona pero imaginemos que esta ayuda la queremos aplicar aveces si y aveces no. La solucion sería tener un metodo que fuese capaz de dar la ayuda.  En primer lugar igualamos a 0 el importe de la ayuda. 
		// private static $ayuda=4500; (Esta es una manera de resolverlo)
		private static $ayuda=0;
		
				
		function Compra_vehiculo($gama){
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}
			
			else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}		
			
			
		}// fin constructor
		
		// Creamos un metodo estatico

		static function descuento_gobierno() {
			// Utilzamos la función date date("m-d-y"); para tener la fecha actual. De este modo aplicaremos el descuento solo si estamos dentro de esta condición
			if(date("m-d-y") > "07-27-16") {
				self::$ayuda=4500; }
		}
		
		
		function climatizador(){		
			
			
				$this->precio_base+=2000;					
			
			
		}// fin climatizador
		
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				
				$this->precio_base+=3500;
				
			}
			
			else{
				
				$this->precio_base+=5000;
				
			}
			
		}// fin tapicería
		
		
		// Ahora quiero que me devuevla el precio base menos el descuento que acabo de establecer
		function precio_final(){

			// Para hacer referencia a una propiedad o metodo estatico ya no podemos utilizar el $this que hace referencia a cada objeto ahora etnemos que utilizar el operador self:: (vemos que con :: se utiliza el $ para referirnos al a propiedad)
			$valor_final=$this->precio_base-self::$ayuda;
			
			return $valor_final;	
			
		}// fin precio final
		
		
		
	}// fin clase


?>