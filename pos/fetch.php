<style>
input#guardar {
    display: none;
}
</style>
<div class="container">

<div class="row">
<div class="col">
    <a  class="btn btn-primary"href="http://localhost/pedidos_online/pos/carrito.php">Ir al carrito</a>
<form action="../productos/addToCart.php" method="post" id="productos">
	<input  id='guardar'type="submit" value="guardar">
	<input type="hidden" name="precio" id="precioid">
	<input type="hidden" name="can" id="canid">
	<input type="hidden" name="prod" id="prodid">
</form>
<input type="button" class="agregarVenta btn btn-success" value="Agregar a carrito">
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
		$output .= '<form action="" method="post">
			<tr id="'.$a.'">
	
				<td id="codigo"><input id="codigoHidden"type="hidden" name="codigo" value="'.$row["codigo"].'"> '.$row["codigo"].'</td>
				<td  ><input id="descripcion"type="hidden"value="'.$row["descripcion"].'" >'.$row["descripcion"].'</td>
				<td ><input id="precio"type="hidden"value="'.$row["precio_bicivic"].'" >'.$row["precio_bicivic"].'</td>
				<td><input type="checkbox" name="check"> Seleccionar</input></td>				
			</tr>
			</form>
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

<div id="divTotal">
<!-- <h3>Total:<span id="totalSpan">0</span></h3> -->
</div>

</div>
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
				 $("#canid").val(can);
				 $("#precioid").val(precio);
				 $("#prodid").val(prod);
				//  $("#productos").append("<input type='hidden' value='"+precio+"' name='precioU'><input type='hidden' value='"+can+"' name='can'><input type='hidden' value='"+prod+"' name='prod'>);
				 var Total = 0;
					$("#ticket").find(".importe");
 $( "#guardar" ).trigger( "click" );
				 $(".importe").each(function () {
    Total += parseInt($(this).val());

// 	$.ajax({
//   method: "POST",
//   url: "../productos/agregarProductos.php",
//   data: { can: can , prod: prod, precio: precio}
// })
//   .done(function( msg ) {
//     alert( "Data Saved: " + msg );
//   });
	// $("#totalSpan").text(Total);
});
// $("#totalSpan").addClass("totalSpan");




//TODO mandar el ticket por medio de un form para guardarlo en bd
//TODO imprimir el ticket
                }
            });
        });	
</script>
