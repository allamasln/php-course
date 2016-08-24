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

	

	if(isset($_POST["enviando"])) {
		
		$age = $_POST["edad_usuario"];
		$name = $_POST["nombre_usuario"];
		/*
		// If anidados
		if($age < 18) {
			echo "Eres menor de edad";
		} else if($age <= 40) {
			echo "Eres joven";
		} else if($age <= 65) {
			echo "Eres maduro";
		} else {
			echo "Cuídate";
		
		}

		*/
		// Funciona igual que un elseif segun el caso puedes preferir uno u otro .

		/*
		switch ($name) {
			case 'Antonio':
				echo "Usuario autorizado. Hola Antonio.";
				break;
			case 'Maria':
				echo "Usuario autorizado. Hola Maria.";
				break;
			case 'Pedro':
				echo "Usuario autorizado. Hola Pedro.";
				break;
			
			default:
				echo "Usuario no autorizado.";
				break;
		}

		*/
		// Podemos hacer condiciones más complejas con el switch de la siguiente forma:

		

		switch (true) {
			case $name == 'Antonio' && $age >= 18:
				echo "Usuario autorizado. Hola Antonio.";
				break;
			case $name == 'Maria' && $age >= 18:
				echo "Usuario autorizado. Hola Maria.";
				break;
			case $name == 'Pedro' && $age >= 18:
				echo "Usuario autorizado. Hola Pedro.";
				break;
			
			default:
				echo "Usuario no autorizado.";
				break;
		}

		/*
			NOTA: 

			break; para el flujo de ejecución y sale del switch si no lo utilizasemos aunque se cumpla un caso pasaría a evaluar y ejecutar otros casos. esta es la diferencia con ifelse. 

		*/

	}
	

?>