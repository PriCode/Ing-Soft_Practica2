<?php	
	class Conexion
	{
		private $user;
		private $pass;
		private $db;
		private $conexion;

		public function __construct($user,$pas,$db){
			$this->user=$user;
			$this->pass=$pas;
			$this->db=$db;			
		}

		public function conn(){
				$this->conexion= new mysqli("localhost", $this->user, $this->pass, $this->db);
			  	if (mysqli_connect_errno()) {
			     	echo 'No puede concectarse a la BD vuelva a intentarlo.';			    
			  	}						
		}
		public function getConn(){
			return $this->conexion;
		}
	}

?>



