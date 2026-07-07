<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica2</title>
</head>
<body>

    <form method="post">
Ingrese el numero del menu : 
<input type ="number" name="menu">
<input type="submit" value="Consultar">
</form>
<?php

if(isset($_POST["menu"])) {

$menu = $_POST["menu"];

Switch ($menu) {
 case 1:
 echo "<p>plato: hamburguesa - precio : $5.50</p>";
 break;   

 case 2:
 echo "<p>plato: pizza - precio : $8.00</p>";
 break;  

 case 3:
 echo "<p>plato: pollo con papas - precio : $6.75</p>";
 break; 

 case 4:
 echo "<p>plato: Ensalada - precio : $4.25</p>";
 break; 

 case 5:
 echo "<p>plato: pasta - precio : $7.50</p>";
 break; 
   
 default :
 echo "<p> opcion no valida</p>";
}

}
  
?>
</body>
</html>