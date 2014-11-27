<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Miraflores Park</title>
 
    <!-- CSS de Bootstrap -->
    <link href="css_/bootstrap.min.css" rel="stylesheet" media="screen">
   	<link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
   	<script type="text/javascript" src="calendario_dw/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="calendario_dw/calendario_dw.js"></script>
	<link href="css/layout.css" rel="stylesheet" type="text/css" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" />
    <link href="css_/layout.css" rel="stylesheet" type="text/css" />
    <link href="css_/menu.css" rel="stylesheet" type="text/css" />


    <style>
    select{padding:5px;border:1px solid #bbb;border-radius:5px;margin:5px 0;display:block;box-shadow:0 0 10px #ddd}
    #resultados{margin:20px 0;padding:20px;border:10px solid #ddd;}
    </style>

    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>

    </head>
    <body>
  	    <!--Cabecera-->
  	    <br>

            <ul align="center" id="nav">
                <li><a href="view.php">Registrar Llegada</a></li>
                <li><a href="view_salidas.php">Registrar Salida</a></li>
                <li><a href="view_visitas.php">Ver historial de llegadas</a></li>
                <li><a href="list_visitas.php">Monitorear Camaras</a></li>
                
                
            </ul>

        <!--</div>-->

        <br>
        <br>
        <br>

        <form name="formulario" class="form-inline" align="center" method="post" action="">
        	
			<br>
			<br>
            <div id="contenedor" align="center">
            	
            	<label>Placa de Automovil:</label>
            	<p><input type="text" name="placa" id="placa" align="center" class="input-small" placeholder="Placa del Auto"></p>
            	<label>Marca y modelo del Automovil:</label>
            	<p><input type="text" name="marca" id="marca" class="input-small" placeholder="Marca y modelo Automovil"></p>	
            	<label>Color del Automovil:</label>
            	<p><input type="text" name="color_auto" id="color_auto" class="input-small" placeholder="Color Automovil"></p>
            	<label>Conductor:</label>
            	<p><input type="text" name="conductor" id="conductor" class="input-small" placeholder="Nombre Conductor"></p>
            	<br>
            	<br>

            	<script>
				function loadXMLDoc(){
					var xmlhttp;
					if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
  						xmlhttp=new XMLHttpRequest();
  					}
					else{// code for IE6, IE5
  						xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  					}
					xmlhttp.onreadystatechange=function(){
  						if (xmlhttp.readyState==4 && xmlhttp.status==200){
    						document.getElementById("respuesta").innerHTML=xmlhttp.responseText;
    					}
  					}

  					placa = document.formulario.placa.value;
        			color_auto = document.formulario.color_auto.value;
        			conductor = document.formulario.conductor.value;
        			marca = document.formulario.marca.value;

					xmlhttp.open("POST","../rules/reg_llegada.php",true);
					xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					xmlhttp.send("placa="+placa+"&marca="+marca+"&color_auto="+color_auto+"&conductor="+conductor);
				}
				</script>
            	<button onclick="loadXMLDoc()" name="enviar" type="button" class="btn">Registrar Llegada</button>
            	<br>
            	<br>
            	<div id="respuesta"></div>
            </div>
            
        </form>

        <br>
        <br>

</body>
</html>

<script src="js/jquery.js"></script>
<script src="js/filter-tags.js"></script>

