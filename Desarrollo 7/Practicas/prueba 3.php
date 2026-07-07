<?php
$num = 8 ; 
if ( $num > 5 ) { echo "$num mayor que 5";}
if ( $num < 5 ) { echo "$num menor que 5";}
if ( $num % 2 == 0 ) {echo "$num es par "; }
if ( $num % 2 != 0 ) {echo "$num es impar"; }

if ( ( 4 > 2 ) && ( 8 > 4 ) ) { echo "4 es mayore que 2 y 8 es mayor que 4";}
if ( 4 > 8 ) { echo "esta prueba es true";}
elseif ( 8 > 4 ) { echo " esta prueba alternativa es true";}
else { echo " ambas pruebas son false";}