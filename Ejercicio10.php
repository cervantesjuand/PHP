<?php

$arraylista = [];

$lista = intval(readline("Escriba el número de enteros que va a ingresar: \n"));

for($i = 1; $i <= $lista; $i++) {
    $elemento = readline("Ingrese el elemento $i: ");
    $arraylista[] = $elemento;
}

sort($arraylista);

echo "Array ordenado: ";

foreach($arraylista as $numero) {
    echo $numero . " ";
}