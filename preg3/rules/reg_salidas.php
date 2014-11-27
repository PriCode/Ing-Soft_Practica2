<?php

	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	//recibimos los valores desde la capa de presentación.
	$placa = $_POST["placa"];
	
	//obtenemos la hora del sistema
	$Lima = new DateTimeZone("America/Lima");
	$DateTime = new DateTime();
	$DateTime -> setTimeZone($Lima);
	$hora = $DateTime -> format("H:m:s");
	$fecha = $DateTime -> format("d/m/Y");
	//damos formato a la hora.
	$fechayhora_sal = $fecha." ".$hora;

	//nos conectamos a la capa de datos.
	require_once("../data/bdconnection.php");
	$conexion = new connection("miraflorespark","llegadas");
	$conexion->conectar();

	$placa_a = "";
	$marca = "";
	$color = "";
	$conductor = "";
	$fecha_ingreso = "";
	$estac = "";

	//buscar datos del auto segun placa.
	$criterio_busqueda = array("Placa_Auto"=>$placa);
	$results = $conexion->read($criterio_busqueda);
	foreach ($results as $result) {
		$placa_a = $result["Placa_Auto"];
		$marca = $result["marca_auto"];
		$color = $result["color_auto"];
		$conductor = $result["conductor"];
		$fecha_ingreso = $result["fecha_ingreso"];
		$estac = $result["cod_estac"];
		echo "			Reporte de Salida.<br>
			Placa: ".$placa_a.".<br> 
			Color ".$color.".<br> 
			Conductor: ".$conductor.". <br> 
			Fecha de Ingreso: ".$fecha_ingreso." <br>
			Estacionamiento: ".$estac.".<br>
			Fecha de salida: ".$fechayhora_sal."<br>";
	}


	/*Ingresar los datos de salida.
	tomamos los valores anteriormente usados de $criterio_busqueda(para encontrar 
	el elemento de la collección que queremos actualizar) y $results donde tenemos
	todos los datos de ese elemento.*/
	$new_data = array("Placa_Auto" => $placa_a,"marca_auto" => $marca, 
				"color_auto"=>$color,"conductor"=>$conductor,
				"fecha_ingreso"=>$fecha_ingreso,"cod_estac"=>$estac,
				"fecha_salida" => $fechayhora_sal);
	$conexion->update($criterio_busqueda,$new_data);
	
?>