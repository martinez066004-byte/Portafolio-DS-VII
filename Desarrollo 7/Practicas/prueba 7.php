<?php
$nota = $_GET["nota"];
echo "Resultado de evaluación del Estudiante";
echo "<hr>";
if ("$nota >= 90 && $nota < 100 ") {
    echo "calificación: excelente";
} elseif ("$nota >= 75 && $nota < 90 ") {
    echo "calificación: bueno";
} elseif ("$nota >= 60 && $nota < 75 ") {
    echo " calificación: aprobado";
}else {
    echo "calificación: reprobado";
}