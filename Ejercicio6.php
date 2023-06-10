<?php

echo "Ingresa un número: ";
$numero = rtrim(fgets(STDIN));

$numeroInvertido = (int)strrev((string)$numero);

echo "Número original: $numero\n";
echo "Número invertido: $numeroInvertido\n";