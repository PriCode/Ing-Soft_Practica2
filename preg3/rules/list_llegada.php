<?php

	require_once("../data/bdconnection.php");
	$conexion = new connection("miraflorespark","llegadas");
	$conexion->conectar();

	$results = 	$conexion->findall();
	$html="<table class=\"table table-bordered\"><thead><td>Conductor</td><td>Placa Automovil</td><td>Marca/Modelo</td><td>Color</td><td>Codigo Estacionamiento</td><td>Fecha Llegada</td><td>Fecha Salida</td> </tr></thead>";
	foreach ($results as $result) {
		$placa_a = $result["Placa_Auto"];
		$marca = $result["marca_auto"];
		$color = $result["color_auto"];
		$conductor = $result["conductor"];
		$fecha_ingreso = $result["fecha_ingreso"];
		$estac = $result["cod_estac"];
		$fecha_salida = $result["fecha_salida"];
        $html.="<tr><td>".$conductor."</td><td>".$placa_a."</td><td>".$marca."</td><td>".$color."</td><td>".$estac."</td><td>".$fecha_ingreso."</td><td>".$fecha_salida."</td></tr>";
        
	}

	echo $html."</table>";

?>