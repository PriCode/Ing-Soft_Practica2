<?php

	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	//recibimos los valores desde la capa de presentación.
	//$num_rows = $_POST["num_rows"];

	//obtenemos la hora del sistema

	//elección de estacionamiento de forma aleatoria.

	//nos conectamos a la capa de datos.
	require_once("../data/bdconnection.php");
	$conexion = new connection("miraflorespark","llegadas");
	$conexion->conectar();

	//
	$query = $conexion->read($criterio_bus);
	foreach ($query as $doc){
		var_dump($doc);
	}

	/*echo "									Registro Ingresado.\n
	La placa del auto es: ".$placa.". El auto es de color ".$color_auto.". Y su conductor es: ".$conductor.".";
	echo "El estacionamiento asignado es: ".$cod_estac;*/
?>