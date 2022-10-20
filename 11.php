<?php

for ( $i2=1   ; 10>=$i2    ; $i2++   ){
    $N=readline("ingrese un numero: ");
    $F=1;
    for ( $i=1   ; $N>=$i    ; $i++   ){
        $F=$F*$i;
    }
    echo "factorial de : " .$N . " es: " . $F  .     PHP_EOL; 
}
