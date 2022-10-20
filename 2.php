<?php

$A=readline ("valor de A: ");
$B=readline ("valor de B: ");
$i = 0;

//para mejorar codigo se puede preguntar que variable es menor para hacer en menor tiempo el resultado
// no es lo mismo 5x10   10x5 en un while


while ($i < $A) {
    echo "contador = $i". PHP_EOL;
    $i++;
    $M=$M+$B;
}
echo "$M";