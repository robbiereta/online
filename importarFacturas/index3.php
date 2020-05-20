
<?php

if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
   
   echo "Estos son los datos de la factura:<hr>";
   readfile($_FILES['userfile']['tmp_name']);
   $xml = simplexml_load_file($_FILES["userfile"]["tmp_name"]); 
$ns = $xml->getNamespaces(true);
$xml->registerXPathNamespace('c', $ns['cfdi']);
$xml->registerXPathNamespace('t', $ns['tfd']);
$cantidad=100;
$codigo=0;
$descripcion=200;
$precioBicivic=300;
 

//EMPIEZO A LEER LA INFORMACION DEL CFDI E IMPRIMIRLA 
 echo"
 <form action='../importarFacturas/barcodes.php' method='post'><table id='data-table'><tbody> <tr>
 <th>Codigo</th>
 <th>Cantidad</th>
 <th>Descripcion</th>
 <th>Precio Bici-vic</th>
</tr>";
foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor') as $Emisor){ 
//    echo $Emisor['Rfc']; 
//    echo "<br />"; 
   echo "<br />Proveedor:   ";
   echo $Emisor['Nombre']; 
   echo "<br />"; 
} 
foreach ($xml->xpath('//cfdi:Comprobante') as $cfdiComprobante){ 
    //       echo $cfdiComprobante['Version']; 
    //       echo "<br />"; 
    echo "Fecha de la factura:  ";
          echo $cfdiComprobante['Fecha']; 
        echo "<br />"; 
    //       echo $cfdiComprobante['Sello']; 
    //       echo "<br />"; 
    //       echo $cfdiComprobante['Total']; 
    //       echo "<br />"; 
    //       echo $cfdiComprobante['SubTotal']; 
    //       echo "<br />"; 
    //       echo $cfdiComprobante['Certificado']; 
    //       echo "<br />"; 
    //       echo $cfdiComprobante['FormaDePago']; 
    //       echo "<br />"; 
    //       echo $cfdiComprobante['NoCertificado']; 
    //       echo "<br />"; 
    //       echo $cfdiComprobante['TipoDeComprobante']; 
    //       echo "<br />"; 
    } 
// foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor//cfdi:DomicilioFiscal') as $DomicilioFiscal){ 
//    echo $DomicilioFiscal['Pais']; 
//    echo "<br />"; 
//    echo $DomicilioFiscal['Calle']; 
//    echo "<br />"; 
//    echo $DomicilioFiscal['Estado']; 
//    echo "<br />"; 
//    echo $DomicilioFiscal['Colonia']; 
//    echo "<br />"; 
//    echo $DomicilioFiscal['Municipio']; 
//    echo "<br />"; 
//    echo $DomicilioFiscal['NoExterior']; 
//    echo "<br />"; 
//    echo $DomicilioFiscal['CodigoPostal']; 
//    echo "<br />"; 
// } 
// foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor//cfdi:ExpedidoEn') as $ExpedidoEn){ 
//    echo $ExpedidoEn['Pais']; 
//    echo "<br />"; 
//    echo $ExpedidoEn['Calle']; 
//    echo "<br />"; 
//    echo $ExpedidoEn['Estado']; 
//    echo "<br />"; 
//    echo $ExpedidoEn['Colonia']; 
//    echo "<br />"; 
//    echo $ExpedidoEn['NoExterior']; 
//    echo "<br />"; 
//    echo $ExpedidoEn['CodigoPostal']; 
//    echo "<br />"; 
// } 
// foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Receptor') as $Receptor){ 
//    echo $Receptor['Rfc']; 
//    echo "<br />"; 
//    echo $Receptor['Nombre']; 
//    echo "<br />"; 
// } 
// foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Receptor//cfdi:Domicilio') as $ReceptorDomicilio){ 
//    echo $ReceptorDomicilio['Pais']; 
//    echo "<br />"; 
//    echo $ReceptorDomicilio['Calle']; 
//    echo "<br />"; 
//    echo $ReceptorDomicilio['Estado']; 
//    echo "<br />"; 
//    echo $ReceptorDomicilio['Colonia']; 
//    echo "<br />"; 
//    echo $ReceptorDomicilio['Municipio']; 
//    echo "<br />"; 
//    echo $ReceptorDomicilio['NoExterior']; 
//    echo "<br />"; 
//    echo $ReceptorDomicilio['NoInterior']; 
//    echo "<br />"; 
//    echo $ReceptorDomicilio['CodigoPostal']; 
//    echo "<br />"; 
foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto') as $Concepto){ 
//    echo "<br />"; 
//    echo $Concepto['Unidad']; 
//    echo "<br />"; 
//    echo $Concepto['Importe']; 
$codigo++;
  $cantidad++;
  $descripcion++;
  $precioBicivic++;
  echo "<tr><td t='s' ><input id='codigoHidden'type='hidden' name='$codigo' value='".str_replace('-', '', $Concepto[ 'NoIdentificacion'])."' /><span contenteditable='true' id='codigo'>".str_replace('-', '', $Concepto[ 'NoIdentificacion'])."</span></td>";  
  echo "<td t='s' id='data-table-A1'><input type='hidden' name='$cantidad' value='".$Concepto['Cantidad']."' /><span contenteditable='true'>".$Concepto['Cantidad']."</span></td>:  "; 
   echo "<td t='s' id='data-table-A1'><input type='hidden' name='$descripcion' value='".$Concepto['Descripcion']."' /><span contenteditable='true'>".$Concepto['Descripcion']."</span></td>:  "; ; 

 

   echo "<td t='s' id='data-table-A1'><input type='hidden' name='$precioBicivic' value='".round($Concepto['ValorUnitario']*1.21*1.75)."' /><span contenteditable='true'>".round($Concepto['ValorUnitario']*1.21*1.75)."</span></td>:  "; ;  
} 
// foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Impuestos//cfdi:Traslados//cfdi:Traslado') as $Traslado){ 
//    echo $Traslado['Tasa']; 
//    echo "<br />"; 
//    echo $Traslado['Importe']; 
//    echo "<br />"; 
//    echo $Traslado['Impuesto']; 
//    echo "<br />";   
//    echo "<br />"; 
// } 
 
// //ESTA ULTIMA PARTE ES LA QUE GENERABA EL ERROR
// foreach ($xml->xpath('//t:TimbreFiscalDigital') as $tfd) {
//    echo $tfd['SelloCFD']; 
//    echo "<br />"; 
//    echo $tfd['FechaTimbrado']; 
//    echo "<br />"; 
//    echo $tfd['UUID']; 
//    echo "<br />"; 
//    echo $tfd['NoCertificadoSAT']; 
//    echo "<br />"; 
//    echo $tfd['Version']; 
//    echo "<br />"; 
//    echo $tfd['SelloSAT']; 
// } 

} else {
   echo "Possible file upload attack: ";
   echo "filename '". $_FILES['userfile']['tmp_name'] . "'.";
}
?>
<!DOCTYPE html>
<!-- saved from url=(0035)https://sheetjs.com/demo/table.html -->
<html data-ember-extension="1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SheetJS JS-XLSX In-Browser HTML Table Export Demo</title>


</head>
<body>
<!--[if gt IE 9]-->
<script type="text/javascript" async="" src="./index2_files/ga.js.descarga"></script><script type="text/javascript" src="./index2_files/shim.min.js.descarga"></script><script type="text/vbscript" language="vbscript">
IE_GetProfileAndPath_Key = "HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Explorer\User Shell Folders\"
Function IE_GetProfileAndPath(key): Set wshell = CreateObject("WScript.Shell"): IE_GetProfileAndPath = wshell.RegRead(IE_GetProfileAndPath_Key & key): IE_GetProfileAndPath = wshell.ExpandEnvironmentStrings("%USERPROFILE%") & "!" & IE_GetProfileAndPath: End Function
Function IE_SaveFile_Impl(FileName, payload): Dim data, plen, i, bit: data = CStr(payload): plen = Len(data): Set fso = CreateObject("Scripting.FileSystemObject"): fso.CreateTextFile FileName, True: Set f = fso.GetFile(FileName): Set stream = f.OpenAsTextStream(2, 0): For i = 1 To plen Step 3: bit = Mid(data, i, 2): stream.write Chr(CLng("&h" & bit)): Next: stream.Close: IE_SaveFile_Impl = True: End Function
</script><script type="text/vbscript" language="vbscript">
Function IE_LoadFile_Impl(FileName): Dim out(), plen, i, cc: Set fso = CreateObject("Scripting.FileSystemObject"): Set f = fso.GetFile(FileName): Set stream = f.OpenAsTextStream(1, 0): plen = f.Size: ReDim out(plen): For i = 1 To plen Step 1: cc = Hex(Asc(stream.read(1))): If Len(cc) < 2 Then: cc = "0" & cc: End If: out(i) = cc: Next: IE_LoadFile_Impl = Join(out,""): End Function
</script>
<script type="text/javascript" src="./index2_files/xlsx.full.min.js.descarga"></script>

<script type="text/javascript" src="./index2_files/Blob.js.descarga"></script>
<script type="text/javascript" src="./index2_files/FileSaver.js.descarga"></script>
<!--[endif]-->

<!--[if lte IE 9]>
<script type="text/javascript" src="shim.min.js"></script>
<script type="text/javascript" src="xlsx.full.min.js"></script>

<script type="text/javascript" src="Blob.js"></script>
<script type="text/javascript" src="FileSaver.js"></script>
<![endif]-->

<!--[if lte IE 9]>
<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript" src="downloadify.min.js"></script>
<script type="text/javascript" src="base64.min.js"></script>
<![endif]-->

<script>
function doit(type, fn, dl) {
	var elt = document.getElementById('data-table');
	var wb = XLSX.utils.table_to_book(elt, {sheet:"Sheet JS"});
	return dl ?
		XLSX.write(wb, {bookType:type, bookSST:true, type: 'base64'}) :
		XLSX.writeFile(wb, fn || ('SheetJSTableExport.' + (type || 'xlsx')));
}
</script>


<!-- <script type="text/javascript">
/* initial table */
var aoa = [
	["This",   "is",     "a",    "Test"],
	["வணக்கம்", "สวัสดี", "你好", "가지마"],
	[1,        2,        3,      4],
	["Click",  "to",     "edit", "cells"]
];
var ws = XLSX.utils.aoa_to_sheet(aoa);
var html_string = XLSX.utils.sheet_to_html(ws, { id: "data-table", editable: true });
document.getElementById("container").innerHTML = html_string;
</script> -->
<br>

<table id="xport">
<tbody><tr><td></td><td>
	<p id="xportxlsx" class="xport"><input type="submit" value="Exportar a excel!" onclick="doit(&#39;xlsx&#39;);"></p>
	<p id="xlsxbtn" class="btn"></p>
</td></tr>

</tbody></table><button type="submit">Agregar productos al sistema</button></form>
<!-- The data encoding type, enctype, MUST be specified as below -->

<pre><b>Powered by the <a href="https://sheetjs.com/opensource">community version of sheetjs</a>.Thanks to <a href="https://stackoverflow.com/users/10011031/pierre">Pierre.</a></b> </pre>
<script type="text/javascript">
function tableau(pid, iid, fmt, ofile) {
	if(typeof Downloadify !== 'undefined') Downloadify.create(pid,{
			swf: 'downloadify.swf',
			downloadImage: 'download.png',
			width: 100,
			height: 30,
			filename: ofile, data: function() { return doit(fmt, ofile, true); },
			transparent: false,
			append: false,
			dataType: 'base64',
			onComplete: function(){ alert('Your File Has Been Saved!'); },
			onCancel: function(){ alert('You have cancelled the saving of this file.'); },
			onError: function(){ alert('You must put something in the File Contents or there will be nothing to save!'); }
	}); else document.getElementById(pid).innerHTML = "";
}
tableau('biff8btn', 'xportbiff8', 'biff8', 'SheetJSTableExport.xls');
tableau('odsbtn',   'xportods',   'ods',   'SheetJSTableExport.ods');
tableau('fodsbtn',  'xportfods',  'fods',  'SheetJSTableExport.fods');
tableau('xlsbbtn',  'xportxlsb',  'xlsb',  'SheetJSTableExport.xlsb');
tableau('xlsxbtn',  'xportxlsx',  'xlsx',  'SheetJSTableExport.xlsx');

</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36810333-1']);
  _gaq.push(['_setDomainName', 'sheetjs.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 $(td#codigo).change( { 
  var text= this.text();
  $(input#codigoHidden).val(text);
     
  });
</script>

</body></html>
