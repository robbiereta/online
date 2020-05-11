<div class="container">

<div class="row">
<div class="col">
    

<input type="button" class="agregarVenta"value="Vender estos productos">
<?php
$connect = mysqli_connect("localhost", "root", "", "motos");
$output = '';
$a=0;
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM productos_bicis 
	WHERE descripcion LIKE '%".$search."%'
	OR codigo LIKE '%".$search."%' 

	";
}
else
{
	$query = "
	SELECT * FROM productos_bicis ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
	
					<table class="table table bordered" id="tableProds">
						<tr>
						
							
							<th>Codigo</th>
							<th>Descripcion</th>
							<th>precio</th>
							<th>Acciones</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$a++;
		$output .= '
			<tr id="'.$a.'">
	
				<td id="codigo"><input id="codigoHidden"type="hidden" name="codigo" value="'.$row["codigo"].'"> '.$row["codigo"].'</td>
				<td  ><input id="descripcion"type="hidden"value="'.$row["descripcion"].'" >'.$row["descripcion"].'</td>
				<td ><input id="precio"type="hidden"value="'.$row["precio_bicivic"].'" >'.$row["precio_bicivic"].'</td>
				<td><input type="checkbox" name="check"> Agregar a venta</input></td>				
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>

</div>  

<div class="col">
   <form action="" method="post">
<table id="ticket" class="table table bordered">
<tbody id="ticketBody">
<tr>
							<th>Cantidad</th>
							<th>Descripcion</th>
							<th>  Precio</th>
							</tr>
							</tbody>
</table>
<input type="submit" value="Cobrar">
</form>
</div>
</div>
</div>
<script>
// Find and remove selected table rows
$(".agregarVenta").click(function(){
            $("table tbody").find('input[name="check"]').each(function(){
            	if($(this).is(":checked")){
					var precio= $(this).parents("tr").find("#precio").val();
                  var prod= $(this).parents("tr").find("#descripcion").val();
				 var can =prompt("cantidad de "+prod);
				 $("#ticket").append("<tr><td>"+can+"</td><td>"+prod+"</td><td>  "+precio+"</td></tr>");
                }
            });
        });	
</script>