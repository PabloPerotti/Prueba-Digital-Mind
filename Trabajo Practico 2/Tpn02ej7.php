<?php
// Costos por tipo de enfermedad
$costos = array(
    1 => 125,
    2 => 116,
    3 => 120,
    4 => 132,
    5 => 138
);

// Tipo de enfermedad del paciente
$tipo_enfermedad = readline("ingrese el tipo de enfermedad del paciente");

// Días de internación del paciente
$dias_internacion = readline("ingrese la cantidad de dias de internacion:");

// Cálculo del costo total de internación del paciente
$costo_total = $costos[$tipo_enfermedad] * $dias_internacion;

// Impresión del resultado
echo "El costo total de internación del paciente es: $" . $costo_total, PHP_EOL
?>
