<?php

$A=readline ("valor de A: ");
$B=readline ("valor de B: ");
$i = 1;
//$M=0; // me obliga a definir variable m antes del do- pq?

do {
     $i++;
     $M=$M+$B;
} while ($i <= $A);

echo "$M";


