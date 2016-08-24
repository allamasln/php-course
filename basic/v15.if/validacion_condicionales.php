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
	}
	
	/*
		NOTA:

		Else if funcióna de tal manera que todo el if funciona como un bloque de tal forma que el else no tiene encuenta solo el ultimo else if sino todo los if que engloba el bloque. 

		Si este mismo programa se hiciese con if independientes sucederia también que al evaluar una condicion y dar positiva no ingoraria el resto de if como pasa con else if al funcionar como un bloque si no que ejecutaria el siguiente if. En este caso por ejemplo si un usuario entrase edad = 50 y el programa estuviese hecho con if independientes evaluaria todos los if y sacaria a pantalla dos mensajes "Eres joven" y "Eres maduro". 

	*/
?>