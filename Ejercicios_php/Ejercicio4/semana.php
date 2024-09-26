<?php



$i = $_POST['week'];




switch ($i) {
    case 1:
        echo "Has escogido el Lunes";  
        break;
    case 2:
        echo "Has escogido el martes";
        break;
    case 3: 
        echo "Has escogido el miércoles";
        break;
    case 4:
        echo "Has escogido el Jueves";
        break;
    case 5: 
        echo "Has escogido el Viernes";
        break;
    case 6:
        echo "Has escogido el Sábado";
        break;
    case 7:
        echo "Has escogido el Domingo";
        break;
    default:
        echo "ERROR!! El número ". $i ."  está fuera de rango";
        break;
    
}
?> 