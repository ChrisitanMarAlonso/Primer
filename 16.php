<?php

//En 1994 el país A tiene una población de 25 millones de habitantes y el país B de 19.9 millones.
// Las tasas de crecimiento de la población son de 2% y 3% respectivamente. Desarrollar un algoritmo para informar
// en que año la población del país B supera a la de A.

$A=25000000;
$B=19900000;
$i=1994;

do{
    $A=$A*1.02;
    $B=$B*1.03;
    $i++;
}while ($B<$A);
echo "En " . $i . " el pais B supera al A en poblacion";