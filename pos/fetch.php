<?php
$connect = mysqli_connect("localhost", "root", "", "motos");
$output = '';
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
					<table class="table table bordered">
						<tr>
						
							
							<th>Codigo</th>
							<th>Descripcion</th>
							<th>precio</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
	
				<td>'.$row["codigo"].'</td>
				<td>'.$row["descripcion"].'</td>
				<td>'.$row["precio_bicivic"].'</td>
				
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