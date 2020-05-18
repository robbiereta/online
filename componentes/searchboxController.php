<div class="container">

<div class="row">
<div class="col">
    

<input type="button" class="agregarVenta" value="Vender estos productos">
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

</div>
</div>
</div>
</div>

   <div id="divTotal">
<h3>Total:<span id="totalSpan">0</span></h3>
<input type="submit" value="Cobrar">
</div><form action="guardarVenta.php" method="post">
<table id="ticket" class="table table bordered">
<tbody id="ticketBody">
<tr>
							<th>Cantidad</th>
							<th>Descripcion</th>
							<th>  Precio</th>
							
							</tr>
							
							</tbody>
</table>


</form>
</form>
</div>
<script>
// Find and remove selected table rows
$(".agregarVenta").click(function(){
            $("table tbody").find('input[name="check"]').each(function(){
            	if($(this).is(":checked")){
					var precio= $(this).parents("tr").find("#precio").val();
                  var prod= $(this).parents("tr").find("#descripcion").val();
				 var can =prompt("cantidad de "+prod);
				 $("#ticket").append("<tr><td>"+can+"</td><td class='precio2'>"+prod+"</td><td><input type='hidden' value='"+precio+"' class='precioU'><input type='hidden' value='"+precio*can+"' class='importe'>  "+precio+"</td></tr>");
				 var Total = 0;
					$("#ticket").find(".importe");

				 $(".importe").each(function () {
    Total += parseInt($(this).val());
	
	$("#totalSpan").text(Total);
});
$("#totalSpan").addClass("totalSpan");




//TODO mandar el ticket por medio de un form para guardarlo en bd
//TODO imprimir el ticket
                }
            });
        });	
</script>
