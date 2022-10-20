<?php

/*Ingrese un valor numérico correspondiente a un mes y a continuación muestre todos los meses en letras que restan
para llegar a diciembre del mismo año (por ejemplo, si ingresa 10 debe mostrar octubre, noviembre y diciembre).
Validar que se ingrese un número de mes válido y el proceso finaliza cuando el operador ingresa el valor cero.
Muestre contando los valores correctos e incorrectos ingresados por el usuario.*/

$ContadorB=0;
$ContadorM=0;

do {
    $Mes = readline('Ingrese el mes en numero: ');
switch ($Mes) {
    case 1:
        echo "               enero - febrero - marzo - abril - mayo - junio - julio - agosto - septiembre - octubre - noviembre - diciembre". PHP_EOL;;
        $ContadorB++;
        break;
    case 2:
        echo "               febrero - marzo - abril - mayo - junio - julio - agosto - septiembre - octubre - noviembre - diciembre". PHP_EOL;;
        $ContadorB++;
        break;
    case 3:
        echo "               marzo - abril - mayo - junio - julio - agosto - septiembre - octubre - noviembre - diciembre". PHP_EOL;;
        $ContadorB++;
        break;    
    case 4:
        echo "               abril - mayo - junio - julio - agosto - septiembre - octubre - noviembre - diciembre". PHP_EOL;;
        $ContadorB++;
        break;
    case 5:
        echo "               mayo - junio - julio - agosto - septiembre - octubre - noviembre - diciembre". PHP_EOL;;
        $ContadorB++;
        break;
    case 6:
        echo "               junio - julio - agosto - septiembre - octubre - noviembre - diciembre". PHP_EOL;;
        $ContadorB++;
        break;
    case 7:
        echo "               julio - agosto - septiembre - octubre - noviembre - diciembre". PHP_EOL;;
        $ContadorB++;
        break;
    case 8:
        echo "               agosto - septiembre - octubre - noviembre - diciembre". PHP_EOL;;
        $ContadorB++;
        break;
    case 9:
        echo "               septiembre - octubre - noviembre - diciembre". PHP_EOL;;
        $ContadorB++;
        break;
    case 10:
        echo "               octubre - noviembre - diciembre". PHP_EOL;;
        $ContadorB++;
        break;
    case 11:
        echo "               noviembre - diciembre". PHP_EOL;;
        $ContadorB++;
        break;
    case 12:
        echo "               diciembre". PHP_EOL;;
        $ContadorB++;
        break;
    default:
        if ($Mes==0){ break;}
        echo "               Ingreso un mes invalido" . PHP_EOL;;
        $ContadorM++;
        break;
} echo " -------------------------------------------------------" . PHP_EOL;
}while($Mes<>0);
echo " -------------------------------------------------------" . PHP_EOL;
echo " introdujo " . $ContadorM . " veces mal el mes" . PHP_EOL;
echo " introdujo " . $ContadorB . " veces bien el mes" . PHP_EOL;
