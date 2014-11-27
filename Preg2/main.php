<?php
include('Model.php');
include('View.php');
include('Controller.php');

$model = new Model();

$controllerSensor = new SensorController($model);
$viewSensor = new SensorListarView($controllerSensor, $model);

$controllerRuta = new RutaController($model);
$viewRuta = new RutaListarView($controllerRuta, $model);
 
$controlador=$_POST['controlador'];
$accion=$_POST['accion'];

if (isset($controlador)){			
	if ($controlador==="sensor") {
				$controllerSensor->{"accion".$accion}();
				$viewSensor->render();
	}else{

		if ($controlador==="ruta") {
				$controllerRuta->{"accion".$accion}();
				$viewRuta->output();
		}
	}
}

?>