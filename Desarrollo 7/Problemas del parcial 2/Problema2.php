<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte2</title>
</head>
<body>

<form method="post">
    Horas trabajadas
<input type="number" name="hora" >
Salario por hora
<input type="number" name="salario" >
<input type="button" value="Ingresar">
</form>
<?php

$seguroS = 9.75;
$seguroE = 1.25;

if(isset($_POST["salario"]) && isset($_POST["hora"])) {

$salario = $_POST["salario"];
$hora = $_POST["hora"];

$salario_bruto = $salario * $hora;

$deducciones = $salario_bruto / $seguroE;
$deducciones2 = $salario_bruto / $seguroS; 

}








?>

</body>
</html>