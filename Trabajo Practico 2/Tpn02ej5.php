<?php
$dia = readline('Ingrese el dia: ');
    if ($dia<1 || $dia>31) {
        echo "dia incorrecto".  PHP_EOL;
    }
$mes = readline('Ingrese el Mes: ');
    if ($mes<1 || $mes>12){
        echo "Comprobar que el mes es el correcto". PHP_EOL;
        
    }
$año = readline('Ingrese el Año: ');
    if ($año<2000) {
        echo "año incorrecto". PHP_EOL;
        
    } else {

switch ($mes) {
    case 1:
        echo "$dia-Enero-$año";
        break;
    case 2:
        echo "$dia-Febrero-$año";
        break;
    case 3:
        echo "$dia-Marzo-$año";
        break;
    case 4:
        echo "$dia-Abril-$año";
        break;
    case 5:
        echo "$dia-Mayo-$año";
        break;
    case 6:
        echo "$dia-Junio-$año";
        break;
    case 7:
        echo "$dia-Julio-$año";
        break;
    case 8:
        echo "$dia-Agosto-$año";
        break;
    case 9:
        echo "$dia-Septiembre-$año";
        break;
    case 10:
        echo "$dia-Octubre-$año";
        break;
    case 11: 
        echo "$dia-Noviembre-$año";
        break;
    case 12: 
        Echo "$dia-Diciembre-$año";
        break;
}
    }



?>