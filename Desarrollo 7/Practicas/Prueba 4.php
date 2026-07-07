<?php
$titulo = "calculadora Simple";
$fecha = date("d/m/y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $titulo; ?> </title>
</head>
<body>
   <h1> <?php echo $titulo; ?> </h1>
   <p>página generada por php el : <?php echo $fecha ; ?></p>
   <button onclick=" calcular()"> Iniciar cálculo</button>
   <p id="resultado"></p> 
</body>
<script>
    function calcular() {
        let num1 = prompt("ingresar el primer numero: ");
        let num2 = prompt("ingrsar el segundo numero: ");

        num1 = parseFloat(num1);
        num2 = parseFloat(num2);

        let suma = num1 + num2;
        let resta = num1 - num2;
        let multi = num1 * num2;
        let div = num1 / num2;

        document.getElementById("resultado").innerHTML =
        "<b> Resultados : </b><br>" +
        num1 + " + " + num2 + " = " + suma + "<br>" +
        num1 + " - " + num2 + " = " + resta + "<br>" +
        num1 + " X " + num2 + " = " + multi + "<br> " +
        num1 + " / " + num2 + " = " + div + "<br> " 
    }
    </script>
</html>