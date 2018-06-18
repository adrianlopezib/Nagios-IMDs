<?php

$contador = 0; 

$archivo = fopen("archivo","r") 
while (!feof($archivo)){ 
     $contador++; 
} 

echo "el numero de lineas es ".$contador."/n";  

?>