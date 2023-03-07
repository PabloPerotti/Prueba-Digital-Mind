<?php

$A = 20;
$B = $A;
$C = 15;
$D = 10;

$var1 = ($A = $B);
$var2 = ($B > $C);
$var3 = ($C < $D);

echo "La operacion es: ";
var_dump (($var1) || ($var2)) || ($var3);

