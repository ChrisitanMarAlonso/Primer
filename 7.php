// Realizar la operación de potenciación (ab), de dos valores enteros positivos, con multiplicaciones.

<?php

$A= readline ("ingrese un numero: ");
$B= readline ("ingrese un numero de potencia: ");
$R=1;
$i=0;

for ( ;$i< $B; $i++){
    $R=$R*$A;
}
echo $A . " elevado al " . $B . " es igual a: " .$R;


