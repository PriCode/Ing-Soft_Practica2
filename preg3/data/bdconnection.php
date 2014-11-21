<?php
/*class connection{
	private $server = "localhost";
	private $user = "root";
	private $pass = ".-dogzilla.-";
	private $db = "miraflorespark";

	function conectar(){
		return mysql_connect($this->server,$this->user,$this->pass);
	}

	function consultar($query){
		$connection = $this->conectar();
		mysql_select_db($this->$db, $connection);
		return mysql_query($query,$connection);
	}
}*/

error_reporting(E_ALL);
ini_set('display_errors', '1');
$m = new MongoClient();
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
}

?>