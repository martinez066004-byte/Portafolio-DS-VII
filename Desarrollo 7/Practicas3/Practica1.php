<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica1</title>
</head>
<body>
    

<form method="post">
Ingrese el numero : 
<input type ="number" name="estado">
<input type="submit" value="Consultar">
</form>
<?php
if (isset($_POST["estado"])) {

$estado = $_POST["estado"];

Switch ($estado) {
    case 1 :
        echo "<p>Avanzar</p>";
        break;

    case 2:
        echo "<p>precaución</p>";
        break;
    case 3:
        echo "<p>Detenerse</p>";
        break;
    case 4:
        echo "<p>Semaforo fuera de servicio</p>";
        break;
    case 5:
        echo "<p>Mantenimiento</p>";
        break;
    default:
    echo "<p>Estado no valido</p>";
}

}
?>
</body>
</html>