<?php

//Un censista recopila ciertos datos aplicando encuestas para el último Censo Nacional de Población y Vivienda.
// Desea procesar los datos de todas las personas que alcance a encuestar en un día y obtener los porcentajes de
// estudios de niveles primario, secundario, superior no universitario, universitario y de postgrado.

$P=0;
$S=0;
$Sup=0;
$U=0;
$Pos=0;

echo PHP_EOL;
echo PHP_EOL;
echo "ingresando 0 finaliza programa" . PHP_EOL;
echo PHP_EOL;

do{
    echo "Nivel Primario =1" . PHP_EOL;
    echo "Nivel Secundario =2". PHP_EOL;
    echo "Nivel Superior =3". PHP_EOL;
    echo "Nivel Universitario =4". PHP_EOL;
    echo "Nivel Posgrado =5". PHP_EOL;
    
    $T=readline("Ingrese el Nivel Alcanzado: ");

    switch ($T) {
        case 1: $P++;
            break;
        case 2: $S++;
            break;
        case 3: $Sup++;
            break;
        case 4: $U++;
            break;
        case 5: $Pos++;
            break;
    }
}while ($T<>0);
$Suma=$P+$S+$S+$U+$Pos;
echo PHP_EOL;
echo "------------------------------------------------------------" .PHP_EOL;
echo "--------------------------INFORME---------------------------" .PHP_EOL;
echo "------------------------------------------------------------" .PHP_EOL;
echo "% de estudios Primarios______ ". ($P*100)/$Suma . PHP_EOL ;
echo "% de estudios Secundarios____ ". ($S*100)/$Suma . PHP_EOL ;
echo "% de estudios Superior_______ ". ($Sup*100)/$Suma . PHP_EOL ;
echo "% de estudios Universitarios_ ". ($U*100)/$Suma . PHP_EOL ;
echo "% de estudios posgrado_______ ". ($Pos*100)/$Suma . PHP_EOL ;
