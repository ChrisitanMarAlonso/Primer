<?php

// Imprimir los 100 primeros números de Fibonacci. Recuerde que un número de Fibonacci se calcula
// como la suma de los dos anteriores así: 0, 1, 1, 2, 3, 5, 8,13…


$TOPE=readline("ingrese hasta que cantidad de Fibonacci llegar: ");
$ANT=0;
$POS=1;
$R=0;

for ( $i=1   ; $TOPE>=$i    ; $i++   ){
    echo $R . PHP_EOL;
    $ANT=$POS;
    $POS=$R;
    $R=$ANT+$POS;
}
echo $F;
