<?php

$numero = array();

for($i = 1; $i <= 100;$i++){

    array_push($numero, $i);
}

foreach ($numero as $valor) {
    if ($valor % 2 == 0) {
        echo $valor. "\n";
}
}





/* $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numeros as $numero) {
    if ($numero % 2== 0) {
        echo $numero;
    }
} */