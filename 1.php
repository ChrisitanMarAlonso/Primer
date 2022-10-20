/* 1. Hacer los algoritmos que calculen el promedio de una serie de notas hasta que se ingrese una nota
negativa, utilizar las tres estructuras repetitivas. ¿Cuál no se puede utilizar? */

<?php

$nota = readline("ingrese la nota: ");
$suma = 0;
$contador=0;

while ($nota >=0) {
    $suma=$suma+$nota;
    $nota = readline("ingrese la nota: ");
    $contador++;
}
echo "su promedio es: ". $suma / $contador;




