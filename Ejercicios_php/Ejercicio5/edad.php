<?php


$i = $_POST['age'];

switch($i){
    case ($i < 12 && $i > 0): 
        echo "Eres un infante por que tienes " . $i . " años";
        break;
    case ($i >= 12 && $i <= 17):
        echo "Eres un Adolescente porque tienes " . $i . " años";
        break;
    case ($i >= 18 && $i <= 60):
        echo "Eres un Adulto porque tienes " . $i . " años";
        break;
    case ($i > 60):
        echo "Eres un Anciano porque tienes " . $i . " años";
        break;
    default: 
        echo "ERROR!! Has metido un número negativo";
}







?>