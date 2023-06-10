<?php

echo "Ingresa una palabra: ";
$palabra = readline("Ingrese una palabra o frase: \n"); // Cambia la palabra aquí según tus necesidades

$palabraLimpia = preg_replace("/[^A-Za-z0-9]/", "", $palabra); //Aquí limpia los espacios


$palabra2 = strrev($palabraLimpia); //aquí invierte la palabra

if ($palabraLimpia == $palabra2) {
    echo "La palabra '$palabraLimpia' es un palíndromo.";
} else {
    echo "La palabra '$palabraLimpia' no es un palíndromo.";
}