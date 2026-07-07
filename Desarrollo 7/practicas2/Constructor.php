<?php 
class producto{
    public $nombre;
    public $precio;
    public $stock;

public function __construct($nombre, $precio, $stock = 0) {
    $this->nombre=$nombre;
    $this->precio=$precio;
    $this->stock=$stock;
    echo "Producto creado: " . $this->nombre . "<br>";    
  }
public function mostrar (){
    echo $this->nombre . "- $". $this->precio . "<br>";
  }
}
$product01 = new producto("mouse", 5.75, 7);
 $product01 ->mostrar();