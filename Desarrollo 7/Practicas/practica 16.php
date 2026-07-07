<?php
$alumnos = [
    ["nombre" => "carlos", "nota" => 88],
    ["nombre" => "María", "nota" => 95],
    ["nombre" => "Luis", "nota" => 75]
];

foreach ($alumnos as $alumno) {
    echo $alumno ['nombre']  . " -  nota: " . $alumno['nota'] . "<br>" ;
}