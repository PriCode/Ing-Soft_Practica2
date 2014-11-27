<?php
class View
{
    private $model;
    private $controller;
 
    public function __construct($controller,$model) {        
        $this->model = $model;
        $this->controller = $controller;
    }
 

}

class SensorListarView extends View{

  public function __construct($controller,$model) {        
        $this->model = $model;
        $this->controller = $controller;
    }

	
	public function render(){

		$result=$this->model->output();		
		$num_results = $result->num_rows;

		$html="<table class='table table-striped' style='margin:24px auto;'>
		<thead>
		<tr>
		<th>ID</th>
		<th>COD</th>
		<th>SENSOR</th>		
		</tr>
		</thead><tbody>";
		 for ($i=0; $i <$num_results; $i++) {
			$row = $result->fetch_assoc();		
			  "<tr>";
			   "<td align=\"center\">" . $row['id'] . "</td>";
			   "<td align=\"center\">" . $row['cod_sensor'] . "</td>";
			   "<td align=\"center\">" . $row['estado'] . "</td></tr>";			  
		}
		
		"</tbody></table>";
		echo $html;
	}
}

class RutaListarView extends View{


	  public function __construct($controller,$model) {        
        $this->model = $model;
        $this->controller = $controller;
    }
 

	
	public function render(){
		$this->model->output();
	}


}
?>