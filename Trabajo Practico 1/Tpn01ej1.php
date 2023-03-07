<?php

$A = 1;
$B = 3;
$C = 4;

$F = ((($A*$B) / sqrt($C)) / ($C - 1/$B)) - (2*$C / $A);

echo "F ES: $F".  PHP_EOL;


$G = (((2*$A) - $B/sqrt($C)) / ($C + 1 / $B)) * ($B / 4);

echo "G ES: $G";

