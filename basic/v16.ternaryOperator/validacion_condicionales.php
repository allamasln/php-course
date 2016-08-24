<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php
	/*
		El operador ternario es una sintaxisis para crear condicionales sencillos

		sintaxis: (Condicion) ? valor si es true: valor si es false;
		
	*/


	if(isset($_POST["enviando"])) {
		$age = $_POST["edad_usuario"];
		$name = $_POST["nombre_usuario"];
	/*
		if($age  < 18) {
			echo "Eres menor de edad. No tienes acceso";
		} else {
			echo "Eres mayor de edad. Tienes acceso";
		}
	*/

		// echo $age < 18 ? "Eres menor de edad. No tienes acceso" : "Eres mayor de edad. Tienes acceso";
		// En lugar que imprima directamente el resultado de la condición se puede guardar en una variable y luego procesarla

		$result = $age < 18 ? "Eres menor de edad. No tienes acceso" : "Eres mayor de edad. Tienes acceso";
		// echo $result;

		// Podemos usar operadores lógicos y complicar la condición
		$result = $name != "" && $age >= 18 ? "Eres mayor de edad. Tienes acceso" : "La edad o el nombre es incorrecto. No tienes acceso";
		echo $result;
	}

	
?>