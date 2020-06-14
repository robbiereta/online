<?php


function connectToDB()
{
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'motos');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
return $link;
}

function Post($value)
 {
     if(isset($_POST[$value])){
         $val2=$_POST[$value];
         
     return $val2;
 }
}
$tablaPedidos=`pedidos`;
 function insert($tablaPedidos)
{
    $query="INSERT INTO'. $tablaPedidos.' (cantidad,producto,precio) VALUES ('.$cantidad.','.$producto.','.$precio)";
}

function doQuery($conexion,$query)
{
    if($result = mysqli_query($conexion, $query)){
        echo "exito";
        
    }
    
    else {
        echo "fallo el query";
    }
}
?>