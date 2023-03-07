<?php

// --------------------------------
// -- Declaración If/else - Si/Sino
// --------------------------------

/*

Esto permite la ejecución condicional.

Piensa en ello como una pregunta de sí/no. Si es verdadera, ejecuta el código.
Si no es verdadera, ejecuta el código en la sección else (si se proporciona una).

 */
/* if ($edad >= 21) {
echo "al tener $edad años, puede cobrar $salario2";
} */

$edad = readline(" Ingrese su Edad: ");
$salario1 = 100000;
$salario2 = 200000;

if ($edad >= 18) {
    echo "al tener $edad años, puede cobrar $salario2";
} else { // $edad < 21 || $edad <=20
    echo "al tener $edad años, puede cobrar $salario1";
}
echo PHP_EOL;
// para acceder a un prestamo debo ser mayor de edad y tener un salario mayor a 150mil
if ($edad >= 18 || $salario > 190000) {
    echo "Puede acceder al prestamo";
} else {
    echo "NO puede acceder al prestamo";
}



//$user = 'admin';//
//$pass = 'admin';//

//$usuario = readline("Ingrese su usuario: ");//
//$contraseña = readline(" Ingrese su contraseña: ");//


//if($usuario==$user{
  //  if($contraseña==$pass){
    //    echo "usuario logueado correctamente"
    //} else { 
     //   echo "contraseña incorrecta";
    //} else { 
    //    echo "usuario incorrecto";
    //}
//}
