<?php
/*

	Ambito de una variable es la zona de actuación que depende de donde y como la declares.

	Trés Ambitos de variables en PHP

	- Ambito Local: 
	  Declarada dentro de una función. Visible y accesible desde dentro de la función.
	
	- Ambito Global: 
	  Declarada en cualquier lugar del código PHP (Dentro o fuera de función) Visible y accesible desde cualquier lugar del código.
	
	- Ambito Super Global: (Lo vemos más adelante)
	  Declarada como Array. Visible y accesible desde fuera del script o programa PHP.
	
*/

	  $name = "Juan";

	  function getName() {

	  		global $name;
	  		$name = "María";
	  }

	  getName();

	  echo $name;

	  /*
		NOTAS:
		- En PHP el ambito de una función y el ambito que está fuera están totalmente diferenciados. Para PHP la variable $name de fuera de la función y la de dentro son variables totalmente diferentes, de tal modo que desde dentro de una función no podemos acceder a la variable $name fuera declarada y viceversa, es decir, si la variable de dentro de la función no es global, cuando se llama a getName() PHP ejecuta el código de dentro de la función pero desde fuera no le es posible acceder al valor de la variable de dentro y es por ello que la sentencia echo $name devuelve Juan. Esto no funciona así en otros lenguajes. 

		- El motivo por que el PHP establece estos ambitos es evitar que se incluyan (con include o require) trozos de código de otros desarrolladores en los que existan variables declaradas en las funciones incluidas con el mismo nombre que las que tengamos en nuestro programa y puedan generar problemas o sobrescribirse. Diferenciando estos dos ambitos PHP consigue que no importe si hay variables con el mismo nombre en diferentes ambitos ya que PHP les da un tratamiento totalmente distinto. 

		- global $name; Se utiliza para darle a una variable definida dentro de una función ambito global. 

		- Si no llamamos a la función getName(), echo $name devuelve Juan aunque la variable de la función tenga ambito global, es devido a que php ejecuta el código de dentro de la función solo cuando se invoca. 
	  */

?>