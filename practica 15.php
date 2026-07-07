<?php

$alumnos = [
    [ 
    "nombre"  => "Carlos",
    "nota"    => 88,
     "ciudad" => "David"
 ],
    [
    "nombre"  => "María",
    "nota"    => 95,
    "ciudad"  =>  "Alto Boquete"
 ],
    [
        "nombre"  => "Luis",
    "nota"    => 72,
    "ciudad"  =>  "La Concepción"
 ]

];

// Acceso : [Fila][Columna]
echo$alumnos[0]["nombre"] . "<br>";
echo$alumnos[1]['nota'];