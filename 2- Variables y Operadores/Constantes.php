<?php

// --------------------------------
// -- Constantes
// --------------------------------

// Solo los valores escalares pueden ser constantes (por ejemplo: Boolean, integer, float, y string)

define('NUEVA_CONSTANTE', 'Valor de la constante'); // Esto es una constante de cadena
define('CONSTANTE_NUMERO', 1234); // Esto es una constante numerica
define('CONSTANTE_FLOAT', 12.34); // Esto es una constante con punto flotante
define('CONSTANTE_BOOLEANA', true); // Esto es una constante booleana

echo NUEVA_CONSTANTE  ; // Esto es un echo de una constante Notar que no lleva el simbolo $
echo CONSTANTE_NUMERO ; // Esto es un echo de una constante
echo CONSTANTE_FLOAT;; // Esto es un echo de una constante
echo CONSTANTE_BOOLEANA . PHP_EOL; // Esto es un echo de una constante
echo NUEVA_CONSTANTE . PHP_EOL. CONSTANTE_NUMERO . PHP_EOL . CONSTANTE_BOOLEANA; // Esto es un echo de varias constantes
