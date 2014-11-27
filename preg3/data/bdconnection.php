<?php

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

class connection{

	private $db;
	private $collection;

	//se inicializa la clase con los nombres de la bd y de la colleccion a la que 
	//queremos conectarnos.
	public function __construct($db,$collection) {
        $this->db = $db;
        $this->collection = $collection;
    }

    //se implementa recién la conexion y se devuelve la conexion.
    function conectar(){
    	$conn = new MongoClient();
    	$this->db = $conn->selectDB('miraflorespark');
    	$this->collection = new MongoCollection($this->db, $this->collection);
    	return $conn;

    }

    function insertar($array_documento){
    	$this->collection->insert($array_documento);
    }

    function delete($clave,$valor){
    	$this->collection->remove(array($clave => $valor));
    }

    function update($criterio_busqueda,$new_data){
    	$this->collection->update($criterio_busqueda,$new_data);
    }

    function read($criterio_busqueda){
    	return $this->collection->find($criterio_busqueda);
    }

    function findall(){
        return $this->collection->find();
    }

}


/*$conexion = new connection("miraflorespark","cajeros");
$conexion->conectar();*/

//insertar valores
//$cajero = array("nombre" => "Pablo Marmol", "cod_cajero" => "MP1234" );
//$conexion->insertar($cajero);


//actualizar valores
//$criterio_busqueda = array("nombre" => "Pablo Marmol");
//$new_data = array("nombre" => "Pablo Marmol","cod_cajero" => "MP9867");
//$conexion->update($criterio_busqueda,$new_data);

//encontrar valores:
//nombre" => "Pablo Marmol","cod_cajero"=>"MP9765" 
/*$criterio_busqueda = array("nombre" => "Pablo Marmol");
$query = $conexion->read($criterio_busqueda);
foreach($query as $doc){
	var_dump($doc);
}*/

//echo "Cajero Registrado";
//echo "Cajero Borrado";
//echo "Cajero Actualizado"; 


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


/*try{
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
}*/

?>