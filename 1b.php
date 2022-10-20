<?php

$nota = readline("ingrese la nota: ");
$suma = 0;
$contador=0;

if ($nota>=0){

while ($nota >=0) {
    $suma=$suma+$nota;
    $nota = readline("ingrese la nota: ");
    $contador++;
}
echo "su promedio es: ". $suma / $contador;
}