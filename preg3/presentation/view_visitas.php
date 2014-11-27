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

        <br>
        <br>
        <h1>Ultimas Llegadas registradas</h1>
        
        
        <form name="formulario" class="form-inline" align="center" method="post" action="">
        	

        	<div id="container" align = "right">
            <tr>
                <td>
                    <select name="combobox" id="combobox">
                        <option name="default" id="default" selected="true" style="display:none;">Ultimas visitas</option>
                        <option name="5" id="5" value="5">5</option>
                        <option name="10" id="10" value="10">10</option>
                        <option name="20" id="20" value="20">20</option>
                        <option name="all" id="all"value="all">Todos</option>
                    </select>
                </td>
                <td>
                    <button onclick="loadXMLDoc()" name="enviar" align="left" type="button" class="btn">Registrar Llegada</button>        
                </td>    
            </tr>
            
        	</div>

            <div id="contenedor" align="center">
        
                <table class="table table-bordered">
                <tr>
                <td>Conductor</td><td>Placa Automovil</td><td>Marca/Modelo</td><td>Color</td><td>Codigo Estacionamiento</td><td>Fecha Llegada</td><td>Fecha Salida</td>
                </tr>

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

  					option = document.combobox.value;
  					/*placa = document.formulario.placa.value;
        			color_auto = document.formulario.color_auto.value;
        			conductor = document.formulario.conductor.value;
        			marca = document.formulario.marca.value;*/

					xmlhttp.open("POST","../rules/list_llegada.php",true);
					xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					xmlhttp.send("num_rows="+option);
				}
				</script>
            	
            	<br>
            	<br>
            	<div id="respuesta"></div>	<!--class="btn"-->
            </div>
            
        </form>

        <br>
        <br>

</body>
</html>

<script src="js/jquery.js"></script>
<script src="js/filter-tags.js"></script>

