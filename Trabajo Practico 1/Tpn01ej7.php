<?php

$resultadoa = (3 * 2 - 4 / 2 * 1) > (3 * 2 + 2 * 1) && (5 > 11 % 4); 
echo "A)= ";
var_dump($resultadoa);

$resultadob = (3 >= 3 or 5 <> 5) && ! (15 / 5 + 2 <> 5). PHP_EOL;
echo "B)= ";
var_dump($resultadob);

$resultadoc = ! (! ((3 * (- 3)) * 2 > (3 - ( -3 ) * 2 ) or 1 ^ 3 * 2 > 6 ) ) . PHP_EOL;
echo "C)= ";
var_dump($resultadoc);

$resultadod = (3 >= 4 && 5 > 3 && 3 > 3) or ! (4 <= 4 or 5 > 4 or 6 >= 7). PHP_EOL;
echo "D)= ";
var_dump($resultadod);