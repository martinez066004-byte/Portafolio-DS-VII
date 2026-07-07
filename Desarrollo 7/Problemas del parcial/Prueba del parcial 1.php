<?php
$Pesos =[5,20,55,10,48];
$i=0;
while($i <=5) {
    Foreach ($Pesos as $i){

    
if($Pesos[$i]<10){
echo "Bulto liviando<br>";
}
if ($Pesos[$i]== 11 & $i <=50){
    echo"Bulto estandar<br>";
}
if ($Pesos[$i]>50){
    echo "Bulto pesado<br>";
}
$i++;
}
}
