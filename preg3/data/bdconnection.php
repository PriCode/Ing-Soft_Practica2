<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
/*$m = new MongoClient();
$db = $m->selectDB('mensajes');
$collection = new MongoCollection($db, 'produce');

// search for fruits
$fruitQuery = array('Type' => 'Fruit');

$cursor = $collection->find($fruitQuery);
foreach ($cursor as $doc) {
    var_dump($doc);
}

// search for produce that is sweet. Taste is a child of Details. 
$sweetQuery = array('Details.Taste' => 'Sweet');
echo "Sweet\n";
$cursor = $collection->find($sweetQuery);
foreach ($cursor as $doc) {
    var_dump($doc);
}*/

//http://www.elclubdelprogramador.com/2013/05/08/mongodb-creando-una-conexion-a-mongodb-con-php/
//http://www.sitepoint.com/mongodb-revisited/
//http://www.dailymotion.com/video/x2awaa1_curso-de-mongodb-con-php-12-consultas-de-agregacion-y-mapreduce_school
//http://php.net/manual/en/class.mongoclient.php


try{
	$mongo = new MongoClient(); //creamos una conexion a MongoDB
	$db = $mongo ->miraflorespark;
	$collection = $db->createCollection("cajeros");
	$cajero = array("nombre" => "Pablo marmol", "cod_cajero" => "MP3976" );
	$collection->insert($cajero);
	echo "Cajero Ingresado";
  //$databases = $mongo->listDBs(); //Listamos las bases de datos
  //echo '<pre>';
  //print_r($databases);
  	$mongo->close();
}catch(MongoConnectionException $e) {
  // manejamos los errores
  die($e->getMessage());
}

?>