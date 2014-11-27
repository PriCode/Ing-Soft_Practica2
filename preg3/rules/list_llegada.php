<?php

	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	require_once("../data/bdconnection.php");
	$conexion = new connection("miraflorespark","llegadas");
	$conexion->conectar();

	$results = 	$conexion->findall();
	foreach ($results as $result) {
		$placa_a = $result["Placa_Auto"];
		$marca = $result["marca_auto"];
		$color = $result["color_auto"];
		$conductor = $result["conductor"];
		$fecha_ingreso = $result["fecha_ingreso"];
		$estac = $result["cod_estac"];
		$fecha_salida = $result["fecha_salida"];
        echo "<td>".$conductor."</td><td>".$placa_a."</td><td>".$marca."</td><td>".$color."</td><td>".$estac."</td><td>".$fecha_ingreso."</td><td>".$fecha_salida."</td>";
        
	}

?>