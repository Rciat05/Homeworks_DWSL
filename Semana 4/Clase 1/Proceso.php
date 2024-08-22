<?php

echo $num1 = isset( $_POST['n1']) ? $_POST['n1']:"";
echo $num2 = isset( $_POST['n2'])  ? $_POST['n2']:"";
echo $operador=isset($_POST['operador']) ? $_POST['operador']:"";


switch($operador){
    case '+':
    echo $respuesta= $num1+$num2;
        break;
    case '-':
    echo $respuesta= $num1-$num2;
        break;
    case '*':
    echo $respuesta= $num1*$num2;
        break;
    case '/':
    echo $respuesta= $num1/$num2;
        break;
            default:
    echo $respuesta="no existe esa condición";
        break;
    }
    
    echo "La respuesta de la operación es: ".$respuesta;
