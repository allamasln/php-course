<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Operadores aritméticos</title>
</head>
<?php
  /*
    + Suma
    - Resta
    * Multiplicación
    / División
    % Módulo (Resto de una división)
    ++ += Incremento en 1 o en n
    -- -= Decremento en 1 o en n

  */



?>
<body>

<p>&nbsp;</p>
<form name="form1" method="post" action="">
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
      <option>Módulo</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>
<p>&nbsp;</p>
<?php
  if(isset($_POST["button"])) {
    $number1 = $_POST["num1"];
    $number2 = $_POST["num2"];
    $operation = $_POST["operacion"];

    if(!strcmp("Suma", $operation)) {
      echo "El resultado de $number1 + $number2 es: " . ($number1 + $number2);
    }
    if(!strcmp("Resta", $operation)) {
      echo "El resultado de $number1 - $number2 es: " . ($number1 - $number2);
    }
    if(!strcmp("División", $operation)) {
      echo "El resultado de $number1 / $number2 es: " . ($number1 / $number2);
    }
    if(!strcmp("Módulo", $operation)) {
      echo "El resto de la division $number1 / $number2 es: " . ($number1 % $number2);
    }

  }

?>


</body>
</html>