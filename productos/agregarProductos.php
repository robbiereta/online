 <?php
//  include("../componentes/header.php");
//  include("../controllers/crud.php");

 function Post($value)
 {
     if(isset($_POST[$value])){
         $val2=$_POST[".$value."];
         
     return $value;
 }
$can= Post('canid');
$prod= Post('prodid');
$precio= Post('canid');
echo $can;
echo $prod;
echo $precio;
?>
// post(can);
// echo  "<h3>value  :".$value. "</h3>";
// for ($i=0; $i <count($arrayProds) ; $i++) { 
//    $codigoi==$arrayProds[$i];
//    echo $codigoi;
//    echo "INSERT INTO `productos_bicis`(codigo) VALUES ($arrayProds[$i])";
//    $i++;
//    echo "UPDATE `productos_bicis`(`cantidad`) VALUES ($arrayProds[$i]) WHERE codigo=$codigoi";
//    $i++;
//    echo "UPDATE productos_bicis('descripcion') VALUES ('$arrayProds[$i]')WHERE codigo='$codigoi'";
//    $i++;
//    echo "UPDATE productos_bicis('precio_bicivic') VALUES ($arrayProds[$i])WHERE codigo='$codigoi'";
// }
// // var_dump($arrayProds) ;
