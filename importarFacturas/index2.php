<!DOCTYPE html>
<!-- saved from url=(0035)https://sheetjs.com/demo/table.html -->
<html data-ember-extension="1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SheetJS JS-XLSX In-Browser HTML Table Export Demo</title>

<style>
.xport, .btn {
	display: inline;
	text-align:center;
}
a { text-decoration: none }
#data-table, #data-table th, #data-table td { border: 1px solid black }
</style>
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
<pre><h3><a href="https://sheetjs.com/">SheetJS</a> JS-XLSX In-Browser HTML Table Export Demo</h3>
<b>Compatibility notes:</b>
- Editable table leverages the HTML5 contenteditable feature, supported in most browsers.
- IE6-9 requires ActiveX or Flash to download files.
- iOS Safari file download may not work. <a href="https://git.io/ios_save">This is a known issue</a>.
- This build is comprehensive. <a href="https://sheetjs.com/demos/tablemini">The "mini" build only includes XLSX support</a>.

<b>Editable Data Table:</b> (click a cell to edit it)
</pre>
<div id="container"><title>SheetJS Table Export</title><table id="data-table"><tbody><tr><td t="s" id="data-table-A1"><span contenteditable="true">This</span></td><td t="s" id="data-table-B1"><span contenteditable="true">is</span></td><td t="s" id="data-table-C1"><span contenteditable="true">a</span></td><td t="s" id="data-table-D1"><span contenteditable="true">Test</span></td></tr><tr><td t="s" id="data-table-A2"><span contenteditable="true">வணக்கம்</span></td><td t="s" id="data-table-B2"><span contenteditable="true">สวัสดี</span></td><td t="s" id="data-table-C2"><span contenteditable="true">你好</span></td><td t="s" id="data-table-D2"><span contenteditable="true">가지마</span></td></tr><tr><td t="n" id="data-table-A3"><span contenteditable="true">1</span></td><td t="n" id="data-table-B3"><span contenteditable="true">2</span></td><td t="n" id="data-table-C3"><span contenteditable="true">3</span></td><td t="n" id="data-table-D3"><span contenteditable="true">4</span></td></tr><tr><td t="s" id="data-table-A4"><span contenteditable="true">Click</span></td><td t="s" id="data-table-B4"><span contenteditable="true">to</span></td><td t="s" id="data-table-C4"><span contenteditable="true">edit</span></td><td t="s" id="data-table-D4"><span contenteditable="true">cells</span></td></tr></tbody></table></div>
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
<pre><b>Export it!</b></pre>
<table id="xport">
<tbody><tr><td><pre>XLSX Excel 2007+ XML</pre></td><td>
	<p id="xportxlsx" class="xport"><input type="submit" value="Export to XLSX!" onclick="doit(&#39;xlsx&#39;);"></p>
	<p id="xlsxbtn" class="btn"></p>
</td></tr>
<tr><td><pre>XLSB Excel 2007+ Binary</pre></td><td>
	<p id="xportxlsb" class="xport"><input type="submit" value="Export to XLSB!" onclick="doit(&#39;xlsb&#39;);"></p>
	<p id="xlsbbtn" class="btn"></p>
</td></tr>
<tr><td><pre>XLS Excel 97-2004 Binary</pre></td><td>
	<p id="xportbiff8" class="xport"><input type="submit" value="Export to XLS!" onclick="doit(&#39;biff8&#39;, &#39;SheetJSTableExport.xls&#39;);"></p>
	<p id="biff8btn" class="btn"></p>
</td></tr>
<tr><td><pre>ODS</pre></td><td>
	<p id="xportods" class="xport"><input type="submit" value="Export to ODS!" onclick="doit(&#39;ods&#39;);"></p>
	<p id="odsbtn" class="btn"></p>
</td></tr>
<tr><td><pre>Flat ODS</pre></td><td>
	<p id="xportfods" class="xport"><input type="submit" value="Export to FODS!" onclick="doit(&#39;fods&#39;, &#39;SheetJSTableExport.fods&#39;);"></p>
	<p id="fodsbtn" class="btn"></p>
</td></tr>
</tbody></table>
<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="procesarXML.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
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
</script>


</body></html>