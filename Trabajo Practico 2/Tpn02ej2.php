<?php

$NOTA = readline("Ingrese nota de presentacion: ");

if ($NOTA >= 6) {
    echo "Usted esta eximido de rendir examen";
} else {
    echo ($NOTA >= 3.5) ? "Usted tiene que rendir examen" : "Usted reprueba";
    
}
?>