<?php

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

    if(!strcmp("Incremento", $calculo)) {
      $aux = $number1++;
      echo "El resultado de incrementar $aux  es: " . $number1;
    }

    if(!strcmp("Decremento", $calculo)) {
      echo "El resultado de decrementar $number1  es: " . --$number1;
    }

    /* 
      NOTA:

      vemos como en incremento utilizamos una variable auxiliar para almacenar el valor introducido por el usuario antes de incrementar para mostrar las dos variables en el echo si ponemos el operador despues de la variable el el valor en esa linea es el introducido por el usuario y estaría incrementado en lineas anteriores por eso aux guarda el valor original.

      En el caso del decremento lo hacemos en la misma linea utilizando el operador de decremento antes de la variable de esta forma decimos que incremente el valor a la variable para que tenga ya el valor decrementado desde esa misma linea.
      
      Ejemplo:

      $var = 1;

     > $var++ // En esta linea var = 1
     > ++$var // En esta linea val empieza valiendo 2 por el incremento de la linea anterior pero como incrementamos antes de usar la variable var = 3
      
     > $var-- // En esta linea var = 3
     > --$var // En esta linea var empieza valiendo 2 al decrementar en la linea anterior y como volvemos a decrementar en esta linea antes de usar la variable var = 1.

    */
  }

?>