<?php

$A = 33;

$var1 = ($A > 10);
$var2 = ($A < 20);

echo "A)= ";
var_dump (!(($var1) and ($var2)));


echo "B)= ";
var_dump (!(($var1) || !($var2)));




