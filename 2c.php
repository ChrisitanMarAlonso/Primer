<?php

$A=readline ("valor de A: ");
$B=readline ("valor de B: ");
$i = 1;
$M=0;

for($i = 1; $i <= $A; $i++){
    $M=$M+$B;  
}
echo "multiplicacion = $M". PHP_EOL;