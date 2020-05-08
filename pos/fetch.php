<?php
$connect = mysqli_connect("localhost", "root", "", "motos");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM productos 
	WHERE Descripcion LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM Descripcion ORDER BY CustomerID";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Customer Name</th>
							<th>Address</th>
							<th>City</th>
							<th>Postal Code</th>
							<th>Country</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["Descripcion	"].'</td>
			
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