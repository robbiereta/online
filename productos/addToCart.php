<?php
include("../controllers/functions.php");
$can=Post('can');
$prod=Post('prod');
$precio=Post('precio');
echo $can;
echo $prod;
echo $precio;
$conexion=connectToDB();
$query="INSERT INTO pedidos(cantidad,producto,precio) VALUES ($can,'.$prod.',$precio)";
doQuery($conexion,$query);

?>

<?php
header("Location: http://localhost/pedidos_online/pos/"); /* Redirección del navegador */

/* Asegurándonos de que el código interior no será ejecutado cuando se realiza la redirección. */
exit;