<?php

$A = 10;
$B = 12;
$C = 13;
$D = 10;

echo "A)= ";
var_dump (($A > $B) || ($A < $C)) && (($A = $C) || ($A >= $B)). PHP_EOL;

echo "B)= ";
var_dump (($A >= $B) || ($A < $D)) && (($A >= $C) && ($C > $D)). PHP_EOL;

echo "C)= ";
var_dump (!($A = $C) && ($C < $B)). PHP_EOL;
