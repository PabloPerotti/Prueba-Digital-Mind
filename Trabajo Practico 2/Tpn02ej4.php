<?php
$A = readline("ingrese el primer lado del triangulo: ");
$B = readline("ingrese el segundo lado del triangulo: ");
$C = readline("ingrese el tercer lado del triangulo: ");

if ($A == $B && $B == $C && $C == $A) {
    echo "Es un triangulo Equilatero";
        } else {
    if ($A != $B && $B != $C && $C != $A) 
        echo "es un triangolo escaleno";
        else
            echo "es un triangulo isosceles";
}
?> 
