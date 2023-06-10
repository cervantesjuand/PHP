<?php

$arraylista = [];

$lista = intval(readline("Escriba el número de enteros que va a ingresar: \n"));

for($i = 1; $i <= $lista; $i++) {
    $elemento = readline("Ingrese el elemento $i: ");
    $arraylista[] = $elemento;
}

foreach($arraylista as $numero) {
    $sumaDivisores = 0;

    for($i = 1; $i <= $numero / 2; $i++) {
        if($numero % $i == 0) {
            $sumaDivisores += $i;
        }
    }
    
    if($sumaDivisores == $numero) {
        echo "$numero es perfecto \n";
    }

}