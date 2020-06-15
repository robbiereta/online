<?php
include("../componentes/header.php");
							include("../controllers/functions.php");
							$conexion=connectToDB();
							$query="SELECT * FROM pedidos" ;
							$result=doQuery($conexion,$query);
                            $output='<h3>Carrito</h3>';
                            $output.='
    <table class="table table bordered" id="tableProds">
    <tr>
                    
                        
    <th>Cantidad</th>
    <th>Producto</th>
    <th>Precio</th>
    <th>Acciones</th>
</tr>	';
                            if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_array($result))
	{
	
        $output .= '
        <tr>
        <td>'.$row['cantidad'].'</td>
        <td>'.$row['producto'].'</td>
        <td>'.$row['precio'].'</td>
    </tr>
       
            
';



}
}
$output.='
</table>';
echo $output;		
					