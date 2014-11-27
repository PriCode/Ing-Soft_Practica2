<?php

class Controller
{
    private $model;
    
    public function __construct($model){
        $this->model = $model;
    }
 

}


class SensorController extends Controller{
	
	private $model;
    
    public function __construct($model){
        $this->model = $model;
    }

   	public function accionListar(){    	
   		echo "entre accion listar<br>"	;
    		$this->model->getListarSensor();    
    		echo "sali accion listar<br>"	;
    }

    public function accionInsertar(){    	
    		$this->model->addListarSensor();    	
    }
    
    public function accionEliminar(){    	
    		$this->model->delListarSensor();    	
    }


	public function accionModificar(){    	
	    		$this->model->setListarSensor();    	
	}
    

}

class RutaController extends Controller{


   	public function accionListar(){
    	
    		 $this->model->getListaRuta();    	    		
    }

    public function accionInsertar(){    	
    		$this->model->addListaRuta();    	
    }
    
    public function accionEliminar(){    	
    		$this->model->delListaRuta();    	
    }


	public function accionModificar(){    	
	    		$this->model->setListaRuta();    	
	}
    


}

















?>


	




















?>