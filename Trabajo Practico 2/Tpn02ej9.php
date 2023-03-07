
<?php

$Nombre = readline("ingrese el nombre del Estudiante:");
$Nota =  readline("Ingrese la nota final:");

switch ($Nota) {
    case 0:
        echo "Reprobado", PHP_EOL;
        break;
    case 1:
    case 2:
    case 3:
        echo "Insuficiente", PHP_EOL;
        break;
    case 4:
    case 5:
        echo "Suficiente", PHP_EOL;
        break;
    case 6:
    case 7: 
        echo "Bueno", PHP_EOL;
        break;
    case 8:
    case 9:
        echo "Distinguido", PHP_EOL;
        break;
    case 10:
        echo "Sobresaliente", PHP_EOL;
        break; 
}

?>