<?php

// Los datos viajan hasta este archivo es decir son accesibles gracias al ambito super global del array $_POST para envío de formularios. 

  if(isset($_POST["button"])) {
    $number1 = $_POST["num1"];
    $number2 = $_POST["num2"];
    $operation = $_POST["operacion"];

    calculate($operation);

  }

  function calculate($calculo) {

  	global $number1;
  	global $number2;

  	if(!strcmp("Suma", $calculo)) {
     	echo "El resultado de $number1 + $number2 es: " . ($number1 + $number2);
    }
    if(!strcmp("Resta", $calculo)) {
      echo "El resultado de $number1 - $number2 es: " . ($number1 - $number2);
    }
    if(!strcmp("División", $calculo)) {
      echo "El resultado de $number1 / $number2 es: " . ($number1 / $number2);
    }
    if(!strcmp("Módulo", $calculo)) {
      echo "El resto de la division $number1 / $number2 es: " . ($number1 % $number2);
    }
  }

  /* 
   NOTAS:
	
	- vemos dos formas de pasar valores definidos fuera al ambito de una función. Pasandolo como parametro o cambiando el ambito de las variables a global. 

   */

?>