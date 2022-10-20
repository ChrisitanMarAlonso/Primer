<?php

//Un ciclista recorre diariamente 200 kilómetros en su práctica competitiva. El atleta solicita un algoritmo que
// le permita registrar el tiempo empleado en cada recorrido, al final del proceso el algoritmo debería mostrar el promedio
//  de los tiempos empleados. También necesita saber cuántas veces su tiempo fue menor a valor dado y cuál fue su mejor
// tiempo realizado.

$P=0;
$MejorT=0;
$CantMenor=0;
$TiempoReferencia=0;
$TiempoTotal=0;
$T=0;
$i=0;

echo "ingresando 0 finaliza programa" . PHP_EOL;
$TiempoReferencia= readline("Cual es el tiempo de referencia: ");

do{
    $T=readline("Ingrese el tiempo realizado: ");
    if ($MejorT==0){
        $MejorT=$T;
    }
    if ($T<>0){
        $i++;
        $P=$P+$T;
        if ($MejorT>$T){
            $MejorT=$T;
        }
        if($T<$TiempoReferencia){
            $CantMenor++;
        }
    }
}while ($T<>0);

echo "El Promedio es: ". $P/$i . PHP_EOL ;
echo "El Mejor Tiempo es: " . $MejorT . PHP_EOL;
echo "Estuvo debajo del tiempo de referencia: " . $CantMenor . " veces" . PHP_EOL;