<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];


if($num1 > $num2 && $num1 > $num3){

    echo "El número mayor es " . $num1;
}
elseif( $num2 > $num1 && $num2 > $num3){
    echo "El número mayor es " . $num2;
}
else{
    echo "El número mayor es " . $num3;
}

?>