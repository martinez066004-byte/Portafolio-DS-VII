<?php

$contraseña = "mipassword123";

$hash = password_hash($contraseña, PASSWORD_DEFAULT);

echo "Contraseña original: " . $contraseña . "<br>";
echo "Hash generado: " . $hash;

?>