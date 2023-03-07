
<?php

// Definimos el valor total de la compra y el color de la bolita que sacó el cliente
$valor_compra = readline("ingrese el Valor de Compra:"); // Este valor puede ser reemplazado por cualquier otro valor
$color_bolita = readline("Ingrese el color de la Bolita:"); // Este valor puede ser reemplazado por cualquier otro valor de los mencionados en el enunciado

// Verificamos el color de la bolita y calculamos el descuento correspondiente
if ($color_bolita == "blanco") {
    $descuento = 0;
} elseif ($color_bolita == "verde") {
    $descuento = 0.1 * $valor_compra;
} elseif ($color_bolita == "amarilla") {
    $descuento = 0.25 * $valor_compra;
} elseif ($color_bolita == "azul") {
    $descuento = 0.5 * $valor_compra;
} elseif ($color_bolita == "anaranjada") {
    $descuento = $valor_compra;
}

// Calculamos el valor final que el cliente debe pagar
$valor_final = $valor_compra - $descuento;

// Imprimimos el valor final que el cliente debe pagar
echo "El valor final de la compra es: " . $valor_final;

?>

