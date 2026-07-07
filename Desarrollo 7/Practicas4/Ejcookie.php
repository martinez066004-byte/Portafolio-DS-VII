<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Crear cookie
  setcookie( "usuario", "jonathan",time() + 3600, "/");
echo "<script>alert('cookie creada con exito')</script>";

if (isset($_COOKIE["usuario"])){
    echo "Bienvenido, ". htmlspecialchars($_COOKIE["usuario"]);
    echo "<br>";
} else{
    echo "No se encontró la cookie";
    echo "<br>";
}


//eliminar cookie
setcookie("usuario","",time() - 3600, "/");
echo "<script>alert('Cookie eliminada exitosamente!');</script>";
?>

</body>
</html>


