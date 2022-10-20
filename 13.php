<?php

//Escribir un programa que lea valores enteros hasta que se introduzca un 0 y
// calcule la media de los positivos y la media de los negativos

$SumaPositivos=0;
$SumaNegativos=0;
$iPositivos=0;
$iNegativos=0;
do {
    $N=readline("introduzca un numero: ");
    
    if ($N>0){
        $SumaPositivos=$SumaPositivos+$N;
        $iPositivos++;
    }elseif($N<0) {
        $SumaNegativos=$SumaNegativos+$N;
        $iNegativos++;
    }
} while ($N <> 0);
echo "Media de los Positivos: " . $SumaPositivos/$iPositivos . PHP_EOL;
echo "Media de los Negativos: " . $SumaNegativos/$iNegativos . PHP_EOL;