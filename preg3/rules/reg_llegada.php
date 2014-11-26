<?php
	$placa = $_POST["placa"];
	$color_auto = $_POST["color_auto"];
	$conductor = $_POST["conductor"];
	$marca = $_POST["marca"];

	$Lima = new DateTimeZone("America/Lima");
	$DateTime = new DateTime();
	$DateTime -> setTimeZone($madrid);
	$hora = $DateTime -> format("H:m:s");
	$fecha = $DateTime -> format("d/m/Y");

	$fechayhora = $fecha." ".$hora;

	require_once("../data/bdconnection.php");
	$conexion = new connection("miraflorespark","llegadas");
	$conexion->conectar();

	//insertar valores
	$cajero = array("Placa_Auto" => $placa, "marca_auto" => $marca, "color_auto" => $color_auto, 
					"conductor" => $conductor, "fecha_ingreso" => $fechayhora);
	$conexion->insertar($cajero);

	echo "									Registro Ingresado.\n
	La placa del auto es: ".$placa.". El auto es de color ".$color_auto.". Y su conductor es: ".$conductor.".";
?>