*/ Realizar la división entera a/b de dos valores enteros positivos mediante restas. /*



<?php
$A= readline ("ingrese un numero: ");
$B= readline ("ingrese un numero: ");
$R=0;
$i=0;

while ($A>=$B) {
    $i++;
    $A=$A-$B;
}

echo "se puede dividir " . $i . " veces enteras";