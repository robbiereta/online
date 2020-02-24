<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once "config.php";
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST["codigo"])){
    $codigo=$_POST["codigo"];
    echo  "<h3>Código del producto :".$codigo. "</h3>";
}
// Attempt select query execution
$sql = "SELECT * FROM mytable WHERE Codigo='$codigo'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<hr>";
        $row = mysqli_fetch_array($result);
            echo "<tr>";
                     
                echo "<td> Descripción: " . $row['Descripcion'] . "</td>";
                echo "<hr>";
                echo "<td> <h2>Precio del producto: $ " . $row['Precio_BiciVic'] . "</h2></td>";
               
            echo "</tr>";
        
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No se hallo el producto o no lo tiene la fabrica.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
//Close connection
mysqli_close($link);
?>
<hr>
<br>
    <a href="../pedidos_new">Regresar a seleccion de refacciones</a>
    <!-- transformar la lista de precios a csv para poder subirla a phpmyadmin -->