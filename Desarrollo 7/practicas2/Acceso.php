<?php
class Estudiantes {
    public $nombre;
    public $nota;

    public function calificacion (){
        if ($this->nota >= 60) {return "Aprobado";}
        else {return "Reprobado";}

    }
    public function mostrarInfo() {
        echo $this->nombre . ": " . $this->calificacion();
        
    }
}
$est01 = new Estudiantes();
$est01->nombre = "Andres";
$est01->nota = "96";
$est01->mostrarinfo();