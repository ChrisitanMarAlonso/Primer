<?php

//Leer 10 valores desde teclado y mostrar la media de los pares y la media de los impares.

// Hacer tres versiones, con un bucle: para, mientras y repetir.
// Repetir el ejercicio considerando que el número de valores se le solicita al usuario.


$SumaPares=0;
$SumaImpares=0;
$iPares=0;
$iImpares=0;
$i=0;
do {
    $N=readline("introduzca un numero: ");
    $i++;

    if (($N % 2) == 0){
        $SumaPares=$SumaPares+$N;
        $iPares++;
    }else {
        $SumaImpares=$SumaImpares+$N;
        $iImpares++;
    }
} while ($i < 10);
echo "Media de los Pares: " . $SumaPares/$iPares . PHP_EOL;
echo "Media de los Impares: " . $SumaImpares/$iImpares . PHP_EOL;