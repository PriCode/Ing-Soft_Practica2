<?php

	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	//recibimos los valores desde la capa de presentación.
	$placa = $_POST["placa"];
	$color_auto = $_POST["color_auto"];
	$conductor = $_POST["conductor"];
	$marca = $_POST["marca"];

	//obtenemos la hora del sistema
	$Lima = new DateTimeZone("America/Lima");
	$DateTime = new DateTime();
	$DateTime -> setTimeZone($Lima);
	$hora = $DateTime -> format("H:m:s");
	$fecha = $DateTime -> format("d/m/Y");
	//damos formato a la hora.
	$fechayhora = $fecha." ".$hora;

	//elección de estacionamiento de forma aleatoria.
	$seccion = rand(1,5);
	switch ($seccion) {
		case '1':
			$section = "A";
			break;
		case '2':
			$section = "B";
			break;
		case '3':
			$section = "C";
			break;
		case '4':
			$section = "D";
			break;
		case '5':
			$section = "E";
			break;
		default:
			$section = "";
			break;
	}

	$position = rand(1,100);

	$cod_estac = $section."".$position; 
	$fecha_sal = "";

	//nos conectamos a la capa de datos.
	require_once("../data/bdconnection.php");
	$conexion = new connection("miraflorespark","llegadas");
	$conexion->conectar();

	//insertar valores
	$cajero = array("Placa_Auto" => $placa, "marca_auto" => $marca, "color_auto" => $color_auto, 
					"conductor" => $conductor, "fecha_ingreso" => $fechayhora, "cod_estac" => $cod_estac, "fecha_salida"=> $fecha_sal);
	$conexion->insertar($cajero);

	echo "									Registro Ingresado.\n
	La placa del auto es: ".$placa.". El auto es de color ".$color_auto.". Y su conductor es: ".$conductor.".";
	echo "El estacionamiento asignado es: ".$cod_estac;
?>