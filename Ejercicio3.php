<?php

$numero = intval(readline("Ingrese un número para calcular el factorial \n"));

$factorial = 1;

if ($numero >= 0) {
    
    for($i = 1; $i <= $numero; $i++) {

        $factorial *= $i;
       
    }
    echo "El factorial es $factorial";
} else {
    echo "El numero que ingrese debe ser mayor a positivo";
    
}




