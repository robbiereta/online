<?php
require '../../vendor/autoload.php';

$connect = mysqli_connect("localhost", "root", "", "motos");
	
	$query = "
	SELECT * FROM productos_bicis ";
	


$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	// This will output the barcode as HTML output to display in the browser
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();

	while($row = mysqli_fetch_array($result))
	{
		echo "<div class='col-sm'>". $generator->getBarcode($row["codigo"], $generator::TYPE_CODE_128);
		echo $row["descripcion"];
		echo '<br>Precio:' .$row["precio_bicivic"]."</div>";
	echo "<hr>";
	}
    
    
}