<?php
$arraylista = [];

$lista = intval(readline("Escriba el número de enteros que va a ingresar: \n"));

for($i = 1; $i <= $lista; $i++) {
    $elemento = readline("Ingrese el elemento $i: ");
    $arraylista[] = $elemento;
}

foreach($arraylista as $numero) {
    $esPrimo = true; // Variable para realizar un seguimiento si el número es primo

    for($i = 2; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0){
            $esPrimo = false; // Si el número es divisible, no es primo
            break;
        }
    }

    if ($esPrimo && $numero > 1) {
        echo "$numero es un número primo \n";
    }
}
 












/* for($i = 1; $i <= $numeroLista; $i++) {

    $numPrimo[$i-1] = floatval(readline("Ingrese el valor: $i \n"));
}
 */


 /* 
$num = [];

for($i = 1; $i <= $numero; $i++) {

    $num [$i-1] = floatval(readline("Ingrese el valor: $i \n"));
}

foreach($num as $valor) {
    if (($valor >= 2) && ($valor % $valor == 1) && ($valor % 1 == $valor)) {
        echo "Estos números son primos $valor \n";
    } else {

    }
}

 */