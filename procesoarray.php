<?php

$compara='pepe';
  $usuarios[]=[['0','pepe','123','1'],['1','ana','456','2'],['2','manolo','678','1'],['3','juan','890','1']];
    foreach( $usuarios as $usu)
        foreach ($usu as $dato){
        if ($compara==$dato[1])
            
          echo "<p> id $dato[0]  nombre $dato[1] pass $dato[2] perfil $dato[3] </p>";
        
                }