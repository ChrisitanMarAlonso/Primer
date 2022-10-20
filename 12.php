<?php
// Leer 20 números y encontrar el mayor y el menor valor leídos.

$N=readline("ingrese un numero: ");
$Mi=$N;
$Ma=$N;

for ( $i=0; $i<=18 ; $i++ ) { 
    $N=readline("ingrese un numero: ");
    
    if ($N>$Ma){
        $Ma=$N;
    }

    if ($N<$Mi){
        $Mi=$N;
    }
}

echo "el valor menor es: " . $Mi . PHP_EOL;
echo "el valor MAYOR es: " . $Ma . PHP_EOL;




