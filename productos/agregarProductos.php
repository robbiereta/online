<?php

foreach($_POST as $cantidad => $can){
    $canFinal = "\$" . $cantidad . "='" . $can . "';";
   
    echo  "<span>Cantidad :".$can . "</h3>";
    $checkCan=is_string($can);

    if($checkCan){
        echo"es string";
    }
       
      
 
}

?>