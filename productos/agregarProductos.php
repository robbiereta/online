<?php
 $arrayProds = array();
 $i=0;
foreach($_POST as $cantidad => $can){
    $canFinal = "\$" . $cantidad . "='" . $can . "';";
   
    // echo  "<span>Cantidad :".$can . "</h3>";
    // $checkCan=is_string($can);

    // if($checkCan){
    //     echo"es string";
    // }
       
    //   var_dump($can);
     
      
     array_push($arrayProds, $can);

 
}
$codigoi;
for ($i=0; $i <count($arrayProds) ; $i++) { 
   $codigoi==$arrayProds[$i];
   echo $codigoi;
   echo "INSERT INTO `productos_bicis`(codigo) VALUES ($arrayProds[$i])";
   $i++;
   echo "UPDATE `productos_bicis`(`cantidad`) VALUES ($arrayProds[$i]) WHERE codigo=$codigoi";
   $i++;
   echo "UPDATE productos_bicis('descripcion') VALUES ('$arrayProds[$i]')WHERE codigo='$codigoi'";
   $i++;
   echo "UPDATE productos_bicis('precio_bicivic') VALUES ($arrayProds[$i])WHERE codigo='$codigoi'";
}
// var_dump($arrayProds) ;
 ?>
