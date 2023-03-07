<?php

$A = readline("Ingrese el valor de A: ");
$B = readline("Ingrese el valor de B: ");
$C = readline("Ingrese el valor de C: ");
$E = readline("Ingrese el valor de D: ");
$F = readline("Ingrese el valor de E: ");
$G = readline("Ingrese el valor de F: ");


$resultadoA = ($A>0 && $B<0);
var_dump($resultadoA);

$resultadoB = ($A !=$B && $B!=$C && $A!=$C);
var_dump($resultadoB);

$resultadoC = ($E!=0 && !($F>$G));
var_dump($resultadoC);

$resultadoD = ($B>$A && $B<$C) || ($B<$A && $B>$C);
var_dump($resultadoD);

$resultadoE = ($F<0 xor !$E<0);
var_dump($resultadoE);