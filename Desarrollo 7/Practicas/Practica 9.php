<?php

try {
    
    $edad = -5;

    if ($edad < 0) {
        throw new Exception("La edad no puede ser negativa");
    }

    echo "Edad válida";

} catch (Exception $e) {

    echo "Error: " . $e->getMessage();

}