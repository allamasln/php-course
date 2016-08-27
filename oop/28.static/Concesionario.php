<?php

	class Compra_vehiculo{
		
		private $precio_base;
		

		// Descuento-> este descuento no depende del objeto es aplicable a todos los objetos. Por eso lo hacemos estatico para compartirlo a todas las instancias u objetos
		static $ayuda=4500;
		
				
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