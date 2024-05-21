
<?php
/* Usando método POST */
$valor1 = $_POST['num1'];
$valor2 = $_POST['num2'];
$soma = $valor1 + $valor2;
print_r("A soma de " .$valor1. " + " . $valor2. " é:  ".$soma);
echo "<br>";
echo "<br>";
print_r("A multiplicação com resultado ".( $soma)." pelo primeiro ". ($valor1).
" número é: ". $soma*$valor1); 

