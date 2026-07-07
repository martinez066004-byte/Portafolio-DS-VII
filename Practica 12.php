<?php 
$productos = ["Disco SSD","Memoria RAM","Ipad"];
$num_proud = count($productos);
for ($i = 0; $i < $num_proud; $i++ ){
    echo "item " . $i +1 . " : " . $productos[$i];
    echo "<br>";
}