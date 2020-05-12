<?php
require '../../vendor/autoload.php';
$connect = mysqli_connect("localhost", "root", "", "motos");
	
	$query = "
	SELECT codigo FROM productos_bicis ";
	


$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	// This will output the barcode as HTML output to display in the browser
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();

	while($row = mysqli_fetch_array($result))
	{
        echo $generator->getBarcode($row["codigo"], $generator::TYPE_CODE_128);
	echo "<hr>";
	}
    
    
}