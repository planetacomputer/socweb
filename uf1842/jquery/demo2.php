<?php
switch ($_GET['operacion']) {
    case "+":
        $resultado = $_GET['num1'] + $_GET['num2'] ;
        break;
    case "-":
        $resultado = $_GET['num1'] - $_GET['num2'] ;
        break;
    case "*":
        $resultado = $_GET['num1'] * $_GET['num2'] ;
        break;
    case "/":
        $resultado = $_GET['num1'] / $_GET['num2'] ;
        break;
    default:
        return "nada";
}
echo $resultado;
?>