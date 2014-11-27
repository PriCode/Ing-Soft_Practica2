<?php
require('conexion.php');

class Model
{
    
    private $model_db;
    private $result;

 
    public function __construct(){
        $this->conexion_db = new Conexion("root","root","DB_equipaje");        
        $this->conexion_db->conn();
    }



	public function getListarSensor(){
		$connection=$this->conexion_db->getConn();
		$query = "select id,cod_sensor,estado from TB_sensores";
		$results = $connection->query($query);		
		 $this->result=json_encode($results);
		var_dump($this->result);

		//$num_results = $results->num_rows;		
		//$this->result="<p>Cantidad de registros: ".$num_results."</p>";

	}


	public function getListarRuta(){
		$connection=$this->conexion_db->getConn();
		$query = "select id,cod_sensor,estado from TB_sensor";
		$results = $connection->query($query);

		$num_results = $results->num_rows;		
		$this->result="<p>Cantidad de registros: ".$num_results."</p>";
	}

 	public function addListarSensor(){    	

    
    }
    
    public function delListarSensor(){    	

    		
    }

	public function setListarSensor(){    	
	    		
	}
    
	public function output(){    	
	    return $this->result;
	}




















}

?>
