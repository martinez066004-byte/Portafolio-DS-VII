<?php
class Auto{
    public $marca;
    public $modelo;
    public $año;
}

    //  creacion de objetos (instancias)
    $auto1 = new Auto();  //objeto 1
    // asignando valor
    $auto1->marca = "hyundai";
    $auto1->modelo = "Grand i10";
    $auto1->año = 2026;
    echo "Lanzamiento del nuevo $auto1->modelo año $auto1->año";


