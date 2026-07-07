<?php

function inic_array($n_elementos, $min, $max){

    $array = array();

    for($i = 0; $i < $n_elementos; $i++){

        $array[$i] = rand($min, $max);

    }

    return $array;
}

$numeros = inic_array(10, 1, 100);

print_r($numeros);

?>