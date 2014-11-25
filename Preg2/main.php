<?php
include('Model.php');
include('View.php');
include('Controller.php');

$model = new Model();
$controllerSensor = new Controller($model);
$viewSensor = new View($controllerSensor, $model);
 

$evento=$_POST['ordenSensor'];

//echo "<pre>".var_dump($evento)."</pre>";

if (isset($evento)){	
	if ($evento=="sensores") {						
			$result=$controllerSensor->listarTabla($evento);	
			echo $result;
			echo $viewSensor->muestra($result);
	}




}else{
			echo "ningun evento recibido";
}



// if (isset($_GET['action']) && !empty($_GET['action'])) {
//     $controller->{$_GET['action']}();
// }
 


//$controllerRuta = new Controller($model);
//$viewRuta = new View($controller, $model);

//echo $view->output();

?>

