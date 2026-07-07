<?php

$monto = 2000;
$itbms = 7;
$impuesto = ($monto * $itbms) / 100;
$total = $monto + $impuesto;
echo "el $itbms% de impuesto de $monto es = $impuesto <br>";
echo "total con ITBMS = $total";