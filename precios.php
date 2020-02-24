<!-- 
spartha 175
-surfer
galaxy -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
   <script src="http://malsup.github.com/jquery.form.js"></script> 
  <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- <dinamic selects query database navbar> -->
    <h2>Consulta de precios</h2>
    Codigo de kurazai:
    <form action="checarPrecio.php" method="post">
    <input type="text" name="codigo" id="">
    <input type="submit" value="Consultar">
    </form>
    <h2>Consulta de manuales</h2>
    Selecciona una moto para consultar sus piezas:
    <br>
    <br>
    <form id="form1" method="post">
    <label >Atom 150</label>
    <select id="location" onchange="setIframeSource()">
    <optgroup label="MOTOR"> 
    <option selected value="relleno.html">Por favor, selecciona una parte</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=778975291&amp;single=true&amp;widget=true&amp;headers=false">CABEZA Y CILINDRO</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=1176335746&single=true">VALVULAS Y BALANCINES</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=423428936&single=true">CARTERS DE MOTOR</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=690963290&single=true">CLUTCH</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=979874464&single=true">BOMBA DE ACEITE</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=25571539&single=true">CUBIERTAS DE CARTERS</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=45153574&single=true">CIGÜEÑAL Y PISTÓN</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=32556348&single=true">TRANSMISION</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=1203713042&single=true">SELECTOR DE CAMBIOS</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=1552506367&single=true">MOTOR DE ARRANQUE</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=92055594&single=true">MAGNETO</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=167132689&single=true">CARBURADOR</option>
    </optgroup>
    <optgroup label="PLASTICOS">
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=1757131946&single=true">PLASTICOS</option>
    </optgroup>
    <optgroup label="ELECTRICO">
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=769366145&single=true">FARO,TABLERO,DIRECCIONALES Y STOP</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=320839733&single=true">SISTEMA ELECTRICO Y COMPONENTES</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=1425086015&single=true">CONTROL DE MANDOS Y CHICOTES</option>
    </optgroup>
    <optgroup label="CHASIS">
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=300722317&single=true">POSAPIES,PEDALES Y PARADORES</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=125991404&single=true">FILTRO DE AIRE Y ESCAPE</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=1878304708&single=true">TANQUE DE COMBUSTIBLE</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=1153115122&single=true">BARRAS Y AMORTIGUADOR</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=997910477&single=true">YUGO</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=571890172&single=true">LLANTA Y FRENO DELANTERO</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=448844947&single=true">HORQUILLA</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=852119628&single=true"> LLANTA Y FRENO TRASERO</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=1041653521&single=true">CHASIS(CUADRO)</option>
    
    </optgroup>
  </select>
<br>
<!-- <label for="">Classic 125</label>
  <select name="classic" id="">
  <option value="">Seleccciona</option>
  </select>
    -->
  
    <span>Classic 125</span>
    <select id="location2" onchange="setIframeSource2()">	
    <option selected value="relleno.html">Por favor, selecciona una parte</option>	
<optgroup label="MOTOR">	MOTOR	</optgroup>
<option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=1412439121&single=true">	CABEZA Y CILINDRO	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=441997243&single=true" >	VÁLVULAS Y BALANCINES	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=1136995217&single=true" >	CARTERS DE MOTOR	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=1866066461&single=true">	CLUTCH	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=579386834&single=true">	BOMBA DE ACEITE	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=1622977302&single=true">	CUBIERTAS DE MOTOR	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=587869174&single=true">	CIGÜEÑAL,PISTÓN Y BIELA	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=1912576421&single=true">	TRANSMISION	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=1224767096&single=true">	SELECTOR DE CAMBIOS	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=889202558&single=true">	MAGNETO	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=1069871929&single=true">	MOTOR DE ARRANQUE	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=309576613&single=true">	CARBURADOR	</option>
<optgroup label="PLASTICOS">	PLÁSTICOS	</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=1153430455&single=true">	PLASTICOS	</option>
<optgroup label="ELECTRICO">	ELÉCTRICO	</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=1066495161&single=true">	FARO, TABLERO,Y STOP	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=897238070&single=true">	SISTEMA ELECTRICO Y COMPONENTES	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=338851447&single=true">	CONTROL DE MANDOS Y CHICOTES	</option>
<optgroup label="CHASIS">	CHASIS	</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=899582056&single=true">	POSAPIE,PEDALES Y PARADORES	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=2108873883&single=true">	FILTRO DE AIRE Y ESCAPE	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=115184920&single=true">	TANQUE DE COMBUSTIBLE	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=1609338148&single=true">	BARRAS Y AMORTIGUADOR	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=1136462483&single=true">	YUGO Y MANUBRIO	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=1387152118&single=true">	LLANTA Y FRENO DELANTERO	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=1217302838&single=true">	HORQUILLA	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=2118491272&single=true">	LLANTA Y FRENO TRASERO	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSB5S1cLGPAFd0LlBbinzgVouEv-Dzz6aNJu_5ocOwKDdLH1f1PuGTh9ZCLsoTKsQ/pubhtml?gid=1204173194&single=true">	CUADRO	</option>
</select>		
<br>
<span>Partner 150</span>
    <select id="location3" onchange="setIframeSource3()">
    <option selected value="relleno.html">Por favor, selecciona una parte</option>	
    <optgroup label="MOTOR">	MOTOR			</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=1611945056&single=true">	CABEZA Y CILINDRO			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=1038947108&single=true  ">	VÁLVULAS Y BALANCINES			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=1059493255&single=true">	CARTERS DE MOTOR			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=2063837704&single=true">	CLUTCH			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=1625054352&single=true">	BOMBA DE ACEITE			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=1151574217&single=true">	CUBIERTAS DE MOTOR			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=1686984498&single=true">	CIGÜEÑAL Y PISTON			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=1329080194&single=true">	TRANSMISION			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=1473055070&single=true">	SELECTOR DE CAMBIOS			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=1282214507&single=true">	MAGNETO			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=1032191878&single=true">	MOTOR DE ARRANQUE			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=110592719&single=true">	CARBURADOR			</option>
<optgroup label="ELECTRICO">	SISTEMA ELECTRICO			</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=83845596&single=true">	TABLERO			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=828921419&single=true">	SISTEMA ELECTRICO Y COMPONENTES			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=2087710055&single=true">	STOP Y FARO Y DIRECCIONALES			</option>
<optgroup label="PLASTICOS">	PLASTICOS			</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=1808387920&single=true">	PLASTICOS			</option>
<optgroup label="CHASIS">	CHASIS			</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=755839781&single=true">	MANDOS Y CHICOTES			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=113608312&single=true">	MANUBRIO			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=942953038&single=true">	YUGO Y BARRAS DELANTERAS			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=1291376903&single=true">	TANQUE DE COMBUSTIBLE			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=993618358&single=true">	ESCAPE			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=500966942&single=true">	HORQUILLA Y AMORTIGUADORES			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=649929836&single=true">	RUEDA DELANTERA Y TRASERA			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=1947205877&single=true">	PEDALES Y PARADORES			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=1662771575&single=true">	FILTRO DE AIRE			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vSRJ3j7NVtxQUMjssoYzptNe1SHwNuR858JfKdUOeAgUMBwsQ3Ot4fK9fxf9Xv4qW-hVllEeX6tXWNH/pubhtml?gid=390377305&single=true">	CUADRO			</option>
    </select>


    <br>
    <span>Spartha 2</span>
    <select id="location4" onchange="setIframeSource4()">
    <option value= "" selected value="relleno.html">Por favor, selecciona una parte</option>	
    <optgroup label="MOTOR">	MOTOR	</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=770001017&single=true">	CABEZA Y CILINDRO	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=1176194883&single=true">	VALVULAS Y BALANCINES	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=613848446&single=true">	CARTERS DE MOTOR	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=992147344&single=true">	CLUTCH	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=820294833&single=true">	BOMBA DE ACEITE Y TENSOR DE CADENA	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=1042726915&single=true">	CUBIERTAS DE CARTERS	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=681181104&single=true">	CIGÜEÑAL Y PISTON	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=1260429896&single=true">	TRANSMISION Y FLECHA DE ARRANQUE	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=543905779&single=true">	SELECTOR DE CAMBIOS	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=1264970556&single=true">	MOTOR DE ARRANQUE	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=134331251&single=true">	MAGNETO	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=1998795321&single=true">	CARBURADOR	</option>
<optgroup label="PLASTICOS">	PLÁSTICOS	</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=893012072&single=true">	PLASTICOS	</option>
<optgroup label="ELECTRICO">	ELÉCTRICO	</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=1351113010&single=true">	FARO TABLERO DIRECCIONALES Y STOP	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=351276071&single=true">	SISTEMA ELECTRICO Y COMPONENTES	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=39354096&single=true">	CONTROL DE MANDOS	</option>
<optgroup label="CHASIS">	CHASIS	</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=54432559&single=true">	POSAPIES Y PEDALES	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=44461693&single=true">	FILTRO Y ESCAPE	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=316791152&single=true">	TANQUE DE COMBUSTIBLE	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=172274622&single=true">	BARRAS DELANTERAS Y AMORTIGUADOR	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=315084946&single=true">	YUGO	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=1517888276&single=true">	LLANTA Y FRENO DELANTERO	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=196171835&single=true">	HORQUILLA	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=2004236546&single=true">	LLANTA Y FRENO TRASERO	</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vTP1MMK322GHs9UgI6flK9vbHVAuQifOk0Vx6vni9Gi9pHIlqPOUjk68WFGYhJeGg/pubhtml?gid=1501831682&single=true">	CUADRO	</option>
    </select>

    <br>
    <span>Fighter 200</span>
    <select id="location5" onchange="setIframeSource5()">
    <option value= "" selected value="relleno.html">Por favor, selecciona una parte</option>
    <optgroup label="MOTOR">	MOTOR			</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=1888404947&single=true">	CABEZA Y CILINDRO			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=621051059&single=true">	VALVULAS Y BALANCINES			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=1622284340&single=true">	CARTERS DE MOTOR			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=1685546911&single=true">	CLUTCH			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=1578882675&single=true">	BOMBA DE ACEITE			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=261100028&single=true">	CUBIERTAS DE CARTER			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=424370545&single=true">	CIGÜEÑAL			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=77236674&single=true">	TRANSMISON			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=62226605&single=true">	SELECTOR DE CAMBIOS			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=1679457702&single=true">	MOTOR DE ARRANQUE			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=1951040634&single=true">	MAGNETO			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=903659748&single=true">	CARBURADOR			</option>
<optgroup label="PLASTICOS">	PLÁSTICOS			</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=630839858&single=true">	PLASTICOS			</option>
<optgroup label="ELECTRICO">	ELÉCTRICO			</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=36090439&single=true">	FARO, TABLERO, DIRECCIONALES Y STOP			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=1795307733&single=true">	SISTEMA ELECTRICO Y COMPONENTES			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=1223456129&single=true">	CONTROL DE MANDOS Y CHICOTES			</option>
<optgroup label="CHASIS">	CHASIS			</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=1726850240&single=true">	POSAPIES Y PEDALES			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=1767117241&single=true">	FILTRO DE AIRE Y ESCAPE			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=1032498444&single=true">	TANQUE DE COMBUSTIBLE			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=1222289154&single=true">	BARRAS Y AMORTIGUADORE			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=1642620376&single=true">	YUGO Y MANUBRIO			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=877792648&single=true">	LLANTA Y FRENO DELANTERO			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=2096152719&single=true">	HORQUILLA			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=1488998260&single=true">	LLANTA Y FRENO TRASERO			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vR3FXJo1Hys2XzMefb-lFwY2SmzQ72fcbMpD7l5PtUrMBD6jpLsGXcmSnB5t1-bzm4QEMKHplbd8WJL/pubhtml?gid=513082304&single=true">	CUADRO			</option>	
    </select>

    <br>
    <span>Bulldog 175</span>
    <select id="location6" onchange="setIframeSource6()">
    <option value= "" selected value="relleno.html">Por favor, selecciona una parte</option>
    <optgroup label="MOTOR">	MOTOR			</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=1994202229&single=true">	CABEZA Y CILINDRO			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=1877352701&single=true">	VALVULAS dY BALANCINES			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=283192704&single=true">	CARTERS DE MOTOR			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=1878787730&single=true">	CLUTCH			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=1917144391&single=true">	BOMBA DE ACEITE			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=1841129613&single=true">	CUBIERTAS DE CARTERS			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=1047902299&single=true">	CIGÜEÑAL Y PISTON			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=196111581&single=true">	TRANSMISION			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=659816823&single=true">	SELECTOR DE CAMBIOS			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=1095105426&single=truex">	MAGNETO			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=2079237304&single=true">	MOTOR DE ARRANQUE			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=983555690&single=true">	CARBURADOR			</option>
<optgroup label="PLASTICOS">	PLÁSTICOS			</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=918147714&single=true">	PLASTICOS			</option>
<optgroup label="ELECTRICO">	ELÉCTRICO			</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=2089979244&single=true">	FARO,TABLERO,DIRECCIONALES Y STOP			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=688908119&single=true">	SISTEMA ELECTRICO Y COMPONENTES			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=62614600&single=true">	CONTROL DE MANDOS,MANUBRIO Y CHICOTES			</option>
<optgroup label="CHASIS">	CHASIS			</optgroup>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=2054495976&single=true">	POSAPIES,PEDALES Y PARADORES			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=1259231739&single=true">	FILTRO DE AIRE Y ESCAPE			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=218183822&single=true">	TANQUE DE COMBUSTIBLE			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=1984533442&single=true">	BARRAS Y AMORTIGUADOR			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=646634093&single=true">	YUGO			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=762122148&single=true">	LLANTA Y FRENO DELANTERO			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=584821128&single=true">	HORQUILLA			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=801279251&single=true">	LLANTA Y FRENO TRASERO			</option>
<option value= "https://docs.google.com/spreadsheets/d/e/2PACX-1vQSvXQjGTvPQ2rH_sD1_oDVSgTrghZvA-8Z56OqUk83sFU8J-06MC1npkDEG5OUXw/pubhtml?gid=594617914&single=true">	CUADRO			</option>
</select>
  </form>
    <div></div>

    <ul id="userList"></ul>

    <div id="userDetail">
     <!-- <p >Name :<strong class="detailName"></strong></p> -->
    </div>
    
    <!--     -->
    <br>
    <iframe id="myIframe" src="relleno.html"></iframe>    
</body>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/6.3.5/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#reserved-urls -->

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
<script src="app.js"></script>
<script> 
   function setIframeSource() {
   var theSelect = document.getElementById('location');
   var theIframe = document.getElementById('myIframe');
   var theUrl;
 
   theUrl = theSelect.options[theSelect.selectedIndex].value;
   theIframe.src = theUrl;
}
function setIframeSource2() {
   var theSelect = document.getElementById('location2');
   var theIframe = document.getElementById('myIframe');
   var theUrl;
 
   theUrl = theSelect.options[theSelect.selectedIndex].value;
   theIframe.src = theUrl;
}
function setIframeSource3() {
   var theSelect = document.getElementById('location3');
   var theIframe = document.getElementById('myIframe');
   var theUrl;
 
   theUrl = theSelect.options[theSelect.selectedIndex].value;
   theIframe.src = theUrl;
}
function setIframeSource4() {
   var theSelect = document.getElementById('location4');
   var theIframe = document.getElementById('myIframe');
   var theUrl;
 
   theUrl = theSelect.options[theSelect.selectedIndex].value;
   theIframe.src = theUrl;
}
function setIframeSource5() {
   var theSelect = document.getElementById('location5');
   var theIframe = document.getElementById('myIframe');
   var theUrl;
 
   theUrl = theSelect.options[theSelect.selectedIndex].value;
   theIframe.src = theUrl;
}
function setIframeSource6() {
   var theSelect = document.getElementById('location6');
   var theIframe = document.getElementById('myIframe');
   var theUrl;
 
   theUrl = theSelect.options[theSelect.selectedIndex].value;
   theIframe.src = theUrl;
}
    </script> 
</html>