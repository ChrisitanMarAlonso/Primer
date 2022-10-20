<?php
// Imprimir los números de 1 a N (siendo N un número que se lee) cada uno con su respectivo factorial.

/* factorial

$N=readline("ingrese un numero: ");
$F=1;

for ( $i=1   ; $N>=$i    ; $i++   ){
    $F=$F*$i;
}
echo "factorial : " . $F; */

$N=readline("ingrese un numero: ");
$N1=1;

for ( ;$N1<=$N ; $N1++ ) { 
    $F=1;
    for ( $i=1   ; $N1>=$i    ; $i++   ){
        $F=$F*$i;
        }
    echo "factorial de ". $N1 . " es: " . $F . PHP_EOL; 
}

