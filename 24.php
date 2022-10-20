<?php

$Stock=0;
$Ingresa=0;
$Sale=0;
$Cantidad=0;

$Stock=readline("ingrese su stock inicial: ");

while ($opcion<>"N"){
    echo "Menu" . PHP_EOL;
    echo "1- INGRESA" . PHP_EOL;
    echo "2- SALE" . PHP_EOL;
    $opcion=readline();
    switch ($opcion) {
        case 1:
            $Cantidad=readline("Ingrese la cantidad que ingresa: ");
            $Ingresa=$Ingresa+$Cantidad;
            $Stock=$Stock+$Cantidad;
            break;

        case 2:
            $Cantidad=readline("Ingrese la cantidad que egresa: ");
            if ($Cantidad > $Stock) {
                echo "NO ALCANZ se lleva " . $Stock . PHP_EOL;
                $Sale=$Sale+$Stock;
                $Stock=0;
                }else {
                    $Stock=$Stock-$Cantidad;
                    $Sale=$Sale+$Cantidad;
                }
            break;
    }
    $opcion=readline("Desea Continuar? S / N: ");
}
echo PHP_EOL;
echo "Stock Final = " . $Stock . PHP_EOL;
echo "Ingresaron  = " . $Ingresa . PHP_EOL;
echo "Salio       = " . $Sale . PHP_EOL;


