<?php

$num1 = 0;
$num2 = 0;

$num1 = $_GET ["num1"];
$num2 = $_GET ["num2"];

if ($num1>$num2 ){
    echo ("el numero 1 es mayor al 2 <br>");
}
if($num1<$num2){
    echo ("el numero 2 es mayor al 1 <br>");
}
if($num1 >0){
    echo("el numero 1 es positivo<br>");
}if($num2 >0){
    echo("el numero 2 es positivo<br>");
     }
if ($num2 % 2 == 0){
    echo ("el numero 2 es par <br>");
     }
if ($num1 == $num2 )
    echo ("ambos numeros son iguales <br>");





