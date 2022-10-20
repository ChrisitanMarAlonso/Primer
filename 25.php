<?php

$Paradas=0;
$i=0;

$Pasajeros=0;
$Bajan=0;
$Suben=0;
//echo round($Numero/2)

$Total=readline ("ingrese un numero de pasajeros inicial: ");
$Suben=$Total;
$Paradas=readline ("ingrese cantidad de paradas: ");

while ($i<$Paradas){
    $Bajan=intval($Total/2);
    $Suben=$Suben+3;
    $Total=$Suben+($Total-$Bajan);
    $i++;
    echo "parada " . $i  ." bajan " . $Bajan. " suben ". $Suben . " Total " . $Total .PHP_EOL;
}
echo "Fin de Trayecto " .$Total ;


