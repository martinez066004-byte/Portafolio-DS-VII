<?php

$pi = 3.1416;
$area = 0;
$longitud = 0;
$radio = 0;
echo ("ingrese el radio para calcular la longitud y el area<br>");

echo ("ingrese el radio<br>");

$radio = $_GET ["radio"];

$area = $pi * $radio^2;

$longitud = 2 * $pi * $radio;

echo ( "El area es $area<br>");
echo  ( "La longitud es $longitud<br>");