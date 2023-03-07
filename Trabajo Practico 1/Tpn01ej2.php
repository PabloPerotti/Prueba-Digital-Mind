<?php

$A = 10; 
$B = 20;

$var1 = ($A!==10);
$var2 = (20>$B);
$var3 = ($A=10);
$var4 = false;
$var5 = true;


var_dump (! (!($var1) ||  ($var2) && ($var3) && $var4) && $var5);
echo  PHP_EOL;





