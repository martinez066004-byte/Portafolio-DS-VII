<!DOCTYPE html>
<html>
<head>
    <title>Altitud Orion</title>
</head>
<body>

<form method="POST">

    <label>Ingresa la altitud:</label>
    <input type="number" name="altitud">

    <button type="submit">Enviar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["altitud"];

    if ($num1 >= 400000) {

        echo "La cápsula Orion está separándose del módulo";

    } elseif ($num1 >= 100000 && $num1 < 400000) {

        echo "Están interrumpidas las comunicaciones por 6 minutos";

    } elseif ($num1 >= 22000 && $num1 < 100000) {

        echo "Se desplegaron los paracaídas de freno";

    } elseif ($num1 < 6001) {

        echo "La nave abre los 3 paracaídas principales";

    } else {

        echo "La nave llegó al océano Pacífico";

    }

}

?>

</body>
</html>