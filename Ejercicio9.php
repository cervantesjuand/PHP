<?php



$numeroMaximo = intval(readline("Ingrese el número máximo de la secuencia de Fibonacci: "));


$num1 = 0;
$num2 = 1;


echo "$num1 $num2 ";


while ($num2 <= $numeroMaximo) {
    $num3 = $num1 + $num2;
    echo "$num3 ";
    $num1 = $num2;
    $num2 = $num3;
}