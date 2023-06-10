<?php

$numeroLista = intval(readline("Ingrese la cantida de números a promediar \n"));
$datosPromedio = [];

for($i = 1; $i <= $numeroLista;$i++){

    $datosPromedio[$i-1] = floatval(readline("Ingrese el valor: $i \n"));

}

$suma = 0.0;

foreach ($datosPromedio as $aux) {

    $suma += $aux;

}

    $promedio = $suma / count($datosPromedio);
    echo "El promedio es: " . $promedio;


/* for($i = 0; $i < count($datosPromedio); $i++) {
    
    $suma += $datosPromedio[$i];
}


$promedio = $suma / count($datosPromedio);

echo "El promedio de los números ingresados es: " . $promedio;
 */