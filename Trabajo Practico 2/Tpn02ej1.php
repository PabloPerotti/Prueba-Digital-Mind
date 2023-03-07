<?php

$N = readline("Ingrese un Numero: ");

if ($N == 0) {
    echo "El numero es cero";
} else {
    echo ($N > 0) ? "El numero es positivo" : "El numero es negativo". PHP_EOL;
    
    echo ($N % 2 == 0) ? "El numero es par" : "El numero es impar". PHP_EOL;

}
?>
