<?php

// Obtener el resto de la división entera a%b de dos números enteros positivos mediante restas.

$A= readline ("ingrese un numero: ");
$B= readline ("ingrese un numero: ");
$R=0;
$i=0;

while ($A>=$B) {
    $i++;
    $A=$A-$B;
}

echo "el resto de la division es: " . $A ;