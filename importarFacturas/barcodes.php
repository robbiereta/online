<?php
require '../vendor/autoload.php';

$arrayProds = array();
$i=0;
foreach($_POST as $codigo => $barcode){
   
    array_push($arrayProds, $barcode);


}
for ($i=0; $i <count($arrayProds) ; $i++) { 
  
    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
    echo "<div class='col-sm'>". $generator->getBarcode($arrayProds[$i], $generator::TYPE_CODE_128);
$i++;
    $i++;
    echo $arrayProds[$i];
    $i++;
    echo "<h1>$".$arrayProds[$i]."</h1>";
echo "<hr/>";
}
  


	// This will output the barcode as HTML output to display in the browser

	
    
    
