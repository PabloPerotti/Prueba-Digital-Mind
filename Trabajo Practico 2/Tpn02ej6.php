p<?php


$diaNacimiento = readline("Ingrese el dia de su nacimiento: ");
$mes = readline("ingrese el mes de su nacimiento: ");

$signo = "";
    switch ($mes) {
        case 1:
            if ($diaNacimiento <= 22) {
                $signo = "Capricornio";
            } else {
                $signo = "Acuario";
            }
            break;
        case 2:
            if ($diaNacimiento <= 20) {
                $signo = "Acuario";
            } else {
                $signo = "Piscis";
            }
            break;
        case 3:
            if ($diaNacimiento <= 20) {
                $signo = "Piscis";
            } else {
                $signo = "Aries";
            }
            break;
        case 4:
            if ($diaNacimiento <= 20) {
                $signo = "Aries";
            } else {
                $signo = "Tauro";
            }
            break;
        case 5:
            if ($diaNacimiento <= 21) {
                $signo = "Tauro";
            } else {
                $signo = "Géminis";
            }
            break;
        case 6:
            if ($diaNacimiento <= 21) {
                $signo = "Géminis";
            } else {
                $signo = "Cáncer";
            }
            break;
        case 7:
            if ($diaNacimiento <= 22) {
                $signo = "Cáncer";
            } else {
                $signo = "Leo";
            }
            break;
        case 8:
            if ($diaNacimiento <= 23) {
                $signo = "Leo";
            } else {
                $signo = "Virgo";
            }
            break;
        case 9:
            if ($diaNacimiento <= 23) {
                $signo = "Virgo";
            } else {
                $signo = "Libra";
            }
            break;
        case 10:
            if ($diaNacimiento <= 23) {
                $signo = "Libra";
            } else {
                $signo = "Escorpio";
            }
            break;
        case 11:
            if ($diaNacimiento <= 22) {
                $signo = "Escorpio";
            } else {
                $signo = "Sagitario";
            }
            break;
        case 12:
            if ($diaNacimiento <= 22) {
                $signo = "Sagitario";
            } else {
                $signo = "Capricornio";
            }
            break;
    }
        echo "Su signo zodiacal es:  $signo. \n";
        
    
?>
