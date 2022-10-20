<?php

//Escribir un programa que vaya pidiendo al usuario valores enteros hasta que introduzca un valor negativo,
// después debe indicar los 3 valores mayores. Por ejemplo, si el usuario introduce los
//  números: 1, 34, 45, 3, 2, 10, 9, 8, 78, 55, 3, 78, 43 y -5, el programa deber a 
//  mostrar: 78, 55, 45. Nótese que en el ejemplo el valor 78 aparece dos veces, pero solo
//   se considera una vez entre los tres mayores. Es decir, los valores máximos repetidos únicamente se tienen
//en cuenta una vez. El orden en el que aparezcan los 3 valores máximos es irrelevante. Aunque en el ejemplo 
//salgan ordenados de mayor a menor, al revés o sin orden también es correcto. Si el usuario introduce menos de tres
$V1=-1;
$V2=-1;
$V3=-1;

do {
    $Valor=readline("Ingrese un numero: ");
    
        if($Valor>$V1){
            $V3=$V2;
            $V2=$V1;
            $V1=$Valor;
            }elseif($Valor>$V2 && $Valor <> $V1){
                $V3=$V2;
                $V2=$Valor;
                }elseif($Valor>$V3 && $Valor <> $V2 && $Valor <> $V1){
                    $V3=$Valor;
                    }
}while ($Valor>-1);
echo PHP_EOL;
if($V3>0){echo "valor 3 ". $V3 . PHP_EOL; };
if($V2>0){echo "valor 2 " .$V2 . PHP_EOL; };
if($V1>0){echo "valor 1 " .$V1 . PHP_EOL; };


