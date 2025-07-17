<?php
function AreaCuadro($lado){
    if ($lado<0)
    {
      throw new Exception  ('Solo numeros positivos');        
    }
    else{
    return $lado*$lado;
    }
}

$mislados=array(2,-6,4);
foreach ($mislados as $lado){
 try{
    echo " El area del cuadrado es ".AreaCuadro($lado)."<br>"; 
     
 }
 catch(Exception $e){
     
     echo "ha habido un  error ".$e->getMessage()."<br>";
 }   
     
}

