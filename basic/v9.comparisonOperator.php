<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

	/* 
		Tabla de operadores de comparación:

		$var1 == $var2 (Igual que)
		Verdadero si las dos variables son iguales

		$var1 =)= $var2 (Identica que)
		Verdadero si las dos variables son iguales y del mismo tipo

		$var1 != $var2 (Diferente que)
		Verdadero si las dos variables no son iguales

		$var1 <> $var2 (Diferente que)
		Verdadero si las dos variables no son iguales y además no son del mismo tipo

		$var1 < $var2 (Menor que)
		Verdadero si $var1 es menor que $var2

		$var1 > $var2 (Mayor que)
		Verdadero si $var1 es mayor que $var2

		$var1 <= $var2 (Menor o igual que)
		Verdadero si $var1 es menor o igual que $var2

		$var1 >= $var2 (Mayor o igual que)
		Verdadero si $var1 es mayor o igual que $var2


	*/

		$var1 = 8; // Dato de tipo entero
		$var2 = "8"; // Dato de tipo string
		$var3 = "Antonio"; 
		$var4 = "8";
		$var5 = 9;


		echo ($var1 == $var2) ? "Son iguales" : "No son iguales";
	
		echo "<br>";
		
		echo ($var1 == $var3) ? "Son iguales" : "No son iguales";

		echo "<br>";
		
		echo ($var1 === $var2) ? "Son identicos" : "No son identicos";

		echo "<br>";
		
		echo ($var2 === $var4) ? "Son identicos" : "No son identicos";

		echo "<br>";
		
		echo ($var1 != $var2) ? "Son diferentes" : "No son diferentes";

		echo "<br>";

		echo ($var1 <> $var2) ? "Son diferentes" : "No son diferentes";
?>
</body>
</html>