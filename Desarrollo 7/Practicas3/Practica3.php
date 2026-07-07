<!DOCTYPE html>
<html>
<head>
    <title>Entrenamiento Mario</title>
</head>
<body>

<form method="post">
    Ingrese la altura:
    <input type="number" name="altura" min="1">
    <input type="submit" value="Iniciar">
</form>

<?php

if(isset($_POST["altura"])){

    $n = $_POST["altura"];
    $pasos = 0;

    echo "<h3>Secuencia:</h3>";
    echo $n;

    while($n > 1){

        if($n % 3 == 0){
            $n = $n / 3;
        }else{
            $n = $n - 1;
        }

        echo " → " . $n;
        $pasos++;
    }

    echo "<br><br>";
    echo "Total de pasos: " . $pasos;
}

?>

</body>
</html>