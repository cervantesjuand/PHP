<?php


$arraylista = [];

$lista = intval(readline("Escriba el número de enteros que va a ingresra: \n"));

for($i = 1; $i <= $lista; $i++) {
    $elemento = readline("Ingrese el elemento $i: ");
    $arraylista[] = $elemento;
}

$buscar = readline("ingrese el elemento que desea buscar: \n");

if(in_array($buscar, $arraylista)) {
    $posicion = array_search($buscar, $arraylista);
    echo "$buscar se encuentra en la posición $posicion del array";
} else {
    echo "$buscar no se encuentra en el array";
} 

