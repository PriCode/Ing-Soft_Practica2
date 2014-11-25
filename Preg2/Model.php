<?php
require('conexion.php');

class Model
{
    //public $string;
    private $model_db;
    private $result;

 
    public function __construct(){
        $this->conexion_db = new Conexion("root","root","DB_equipaje");        
        $this->conexion_db->conn();
    }

	public function listar($tabla){
		$connection=$this->conexion_db->getConn();
		$query = "select id,cod_sensor,estado from TB_$tabla";
		echo $query;
		$results = $connection->query($query);
		var_dump($results);
		$num_results = $results->num_rows;		
		$this->result="<p>Cantidad de registros: ".$num_results."</p>";
	}















	public  function getResult(){
		return $this->result;
	}


 }

 ?>
