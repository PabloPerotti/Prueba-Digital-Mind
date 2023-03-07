<?php

$A = readline("Ingrese el primer Numero: ");
$B = readline("Ingrese el Segundo Numero: ");
$C = readline("Ingrese el Tercer Numero: ");

if ($A == $B || $B ==$C || $C == $A) {
    echo "no debe ingresar numeros iguales";
} else {
    if ($A > $B && $A > $C) {// A ES EL MAYOR DE TODOS
        if ($B > $C) 
            echo "El orden creciente seria: $C $B $A ";
        }    else {
            echo "El orden creciente seria: $B $C $A ";
    }
}

?>

