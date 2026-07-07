<?php
// Solicitar y leer el valor del lado1
echo "Ingrese el lado1 del triangulo: ";
$lado1 = trim(fgets(STDIN));

// Solicitar y leer el valor del lado2
echo "Ingrese el lado2 del triangulo: ";
$lado2 = trim(fgets(STDIN));

// Solicitar y leer el valor de la base
echo "Ingrese la base del triangulo: ";
$base = trim(fgets(STDIN));

// Convertir las entradas a enteros
$lado1 = intval($lado1);
$lado2 = intval($lado2);
$base = intval($base);

// Verificar si los lados pueden formar un triángulo
$sum = $lado1 + $lado2;

if ($sum < $base) {
    echo "Los valores no forman un triangulo.\n";
} else {
    // Determinar el tipo de triángulo
    if ($lado1 == $lado2 && $lado2 == $base) {
        echo "El triangulo es equilatero";
    } else if ($lado1 == $lado2 || $lado1 == $base || $lado2 == $base) {
        echo "El triangulo es isoceles";
    } else {
        echo "El triangulo es escaleno";
    }
}
?>
