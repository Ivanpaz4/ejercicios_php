<?php

/* 
Habilitamos 3 variables:

$i = valor introducido por el usuario.
$a =  creamos una valiable igual a 1 para el bucle while();

** con estas dos variables conseguimos 
que se impriman todos los números que van 
de 1 a N, en este caso $i.**

Por último establecemos una variable igualada a 0 
que hace de contador 
**!!IMPORTANTE!!**
La posición de suma va entre echo y $a++ si no la suma da errónea

*/ 
$i = $_POST['plus'];
$a = 1;
$c = 0 ;

while($a <= $i){
    
    echo " ". $a . "<br>";
    
    $c = $a + $c;

    $a++;
    

}
echo "  El valor de la suma es: " .$c;


?>