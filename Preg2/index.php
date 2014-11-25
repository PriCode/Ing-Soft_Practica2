<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>System AdminPackage</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/icons.css" rel="stylesheet" type="text/css">
<!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">-->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/plugins/charts/sparkline.min.js"></script>
<script type="text/javascript" src="js/plugins/charts/flot.js"></script>
<script type="text/javascript" src="js/plugins/charts/flot.pie.js"></script>

<script type="text/javascript" src="js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/inputmask.js"></script>
<script type="text/javascript" src="js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/switch.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/uploader/plupload.queue.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/wysihtml5/toolbar.js"></script>

<script type="text/javascript" src="js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/timepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/collapsible.min.js"></script>


<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/application.js"></script>
<script type="text/javascript" src="js/charts/full/auto_filled.js"></script>
<script type="text/javascript" src="js/charts/full/pie.js"></script>
<script type="text/javascript" src="js/charts/full/pie_full.js"></script>


</head>

<body class="sidebar-wide">

	<!-- Navbar -->
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="images/logo.png" alt="Londinium"></a>
			<a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
		</div>

		<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-people"></i>
					<span class="label label-default">1</span>
				</a>
				<div class="popup dropdown-menu dropdown-menu-right">
					<div class="popup-header">
						<a href="#" class="pull-left"><i class="icon-spinner7"></i></a>
						<span>Activity</span>
						<a href="#" class="pull-right"><i class="icon-paragraph-justify"></i></a>
					</div>
	                <ul class="activity">
		                <li>
		                	<i class="icon-paragraph-justify2 text-warning"></i>
		                	<div>
			                	There are <a href="#">3 nuevas tareas!!</a> Esperan por ti, no lo olvides!!
			                	<span>Hace 2 horas</span>
		                	</div>
		                </li>
	                </ul>
                </div>
			</li>

			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-paragraph-justify2"></i>
					<span class="label label-default">6</span>
				</a>
				<div class="popup dropdown-menu dropdown-menu-right">
					<div class="popup-header">
						<a href="#" class="pull-left"><i class="icon-spinner7"></i></a>
						<span>Mensajes</span>
						<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
					</div>
					<ul class="popup-messages">
						<li class="unread">
							<a href="#">
								<img src="images/logos/300.png" alt="" class="user-face">
								<strong>Eugene Kopyov <i class="icon-attachment2"></i></strong>
								<span>Como vas con el trabajo?..</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/logos/300.png" alt="" class="user-face">
								<strong>Jason Goldsmith <i class="icon-attachment2"></i></strong>
								<span>Te estoy enviando el reporte 243223-TA</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/logos/300.png" alt="" class="user-face">
								<strong>Angel Novator</strong>
								<span>Necesitamos reunirmos para discutir ...</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/logos/300.png" alt="" class="user-face">
								<strong>Monica Bloomberg</strong>
								<span>Creo que encontre el post!!</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/logos/300.png" alt="" class="user-face">
								<strong>Patrick Winsleur</strong>
								<span>Como llege aqui??</span>
							</a>
						</li>
					</ul>
				</div>
			</li>

			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle">
					<i class="icon-grid"></i>
				</a>
				<div class="popup dropdown-menu dropdown-menu-right">
					<div class="popup-header">
						<a href="#" class="pull-left"><i class="icon-spinner7"></i></a>
						<span>Lista de Tareas</span>
						<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
					</div>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Descripcion</th>
								<th>Categoria</th>
								<th class="text-center">Prioridad</th>
							</tr>
						</thead>
						<tbody>							
							<tr>
								<td><span class="status status-success item-before"></span> <a href="#">Generar informe de cuotas</a></td>
								<td><span class="text-smaller text-semibold">Informes</span></td>
								<td class="text-center"><span class="label label-success">50%</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</li>

			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<img src="images/logos/300.png" alt="">
					<span>Andres Carrillo</span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="#"><i class="icon-user"></i> Perfil</a></li>
					<li><a href="#"><i class="icon-bubble4"></i> Mensajes</a></li>
					<li><a href="#"><i class="icon-cog"></i> Configuracion</a></li>
					<li><a href="#"><i class="icon-exit"></i> Salir</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- /navbar -->


	<!-- Pagina contenedora -->
	<div class="page-container">
		<!-- Sidebar -->
		<div class="sidebar collapse">
			<div class="sidebar-content">

				<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="images/logos/300.png" alt="">
						<div class="user-info">	Andres Carrillo <span>Counter de Aerolineas </span>
						</div>
					</a>					
				</div>
				<!-- /user dropdown -->

				<!-- Main navigation -->
				<ul class="navigation">
					<li>
						<a href="#"><span>Tablero Principal</span> <i class="icon-screen2"></i></a>
					</li>					
					<li>
						<a href="#" class="expand"><span> Vuelos </span> <i class="icon-grid"></i></a>						
						<ul>
							<li><a href="#">Busqueda de Vuelos</a></li>														
						</ul>

					</li>
				
			</div>			
		</div>
		<!-- /sidebar -->

	<div class="page-content">
		<div class="page-header">
					<div class="page-title">
						<h3>Tablero Principal<small>Panel de Control</small></h3>
					</div>
					<div id="reportrange" class="range">
						<div class="visible-xs header-element-toggle">
							<a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>
						</div>
						<div class="date-range">
								<i>24</i> <b><i>Oct</i> <i>2014</i></b><em> - </em><i>22</i> <b><i>Nov</i> <i>2014</i></b></div>
						<span class="label label-danger">9</span>
					</div>					
		</div>



<!-- Barrra de busqueda-->		

	<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li class="active" >Tablero Principal</li>					
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>

				<ul class="breadcrumb-buttons collapse">


					<li class="language dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/flags/spanish.png" alt=""> <span>Español</span> <b class="caret"></b></a>
						<ul class="dropdown-menu dropdown-menu-right icons-right">
							<li><a href="#"><img src="images/flags/ukrainian.png" alt=""> Ukrainian</a></li>
							<li class="active"><a href="#"><img src="images/flags/english.png" alt=""> English</a></li>
							<li><a href="#"><img src="images/flags/spanish.png" alt=""> Spanish</a></li>
							<li><a href="#"><img src="images/flags/german.png" alt=""> German</a></li>
							<li><a href="#"><img src="images/flags/hungarian.png" alt=""> Hungarian</a></li>
						</ul>
					</li>
				</ul>
	</div>

<!-- /Barrra de busqueda-->

	<div class="block">
	<!-- Grafico izquierdo -->
		<div class="col-md-6">
			<div class="panel panel-default">
				        <div class="panel-heading">
					        <h6 class="panel-title"><i class="icon-calendar2"></i> Aerolineas</h6>
				        </div>
				        <div class="panel-body">
					        <div style="padding: 0px; position: relative;" class="graph-standard" id="pie"><canvas height="250" width="302" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 302px; height: 250px;" class="flot-base"></canvas><canvas height="250" width="302" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 302px; height: 250px;" class="flot-overlay"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 45px; left: 183.5px;"><div style="font-size:8pt;text-align:center;padding:2px;color:white;">Series1<br>23%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 168px; left: 186.5px;"><div style="font-size:8pt;text-align:center;padding:2px;color:white;">Series2<br>30%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 120px; left: 46.5px;"><div style="font-size:8pt;text-align:center;padding:2px;color:white;">Series3<br>39%</div></span></div>
				        </div>
			  </div>






		</div>
	<!-- /Grafico izquierdo -->	


		<!-- Grafico derecho -->
		<div class="col-md-6">
			<div class="panel panel-default">
				       <div class="panel-heading">
					        <h6 class="panel-title"><i class="icon-calendar2"></i> Transito Total</h6>
				        </div>
				        <div class="panel-body">
					        <div style="padding: 0px; position: relative;" class="graph-standard" id="auto_filled"><canvas height="250" width="485" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 485px; height: 250px;" class="flot-base"></canvas><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);" class="flot-text"><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-x-axis flot-x1-axis xAxis x1Axis"><div style="position: absolute; max-width: 97px; top: 244px; font: 400 11px/1px &quot;Open Sans&quot;,sans-serif; color: rgb(51, 51, 51); left: 29px; text-align: center;">0</div><div style="position: absolute; max-width: 97px; top: 244px; font: 400 11px/1px &quot;Open Sans&quot;,sans-serif; color: rgb(51, 51, 51); left: 140px; text-align: center;">5</div><div style="position: absolute; max-width: 97px; top: 244px; font: 400 11px/1px &quot;Open Sans&quot;,sans-serif; color: rgb(51, 51, 51); left: 249px; text-align: center;">10</div><div style="position: absolute; max-width: 97px; top: 244px; font: 400 11px/1px &quot;Open Sans&quot;,sans-serif; color: rgb(51, 51, 51); left: 360px; text-align: center;">15</div><div style="position: absolute; max-width: 97px; top: 244px; font: 400 11px/1px &quot;Open Sans&quot;,sans-serif; color: rgb(51, 51, 51); left: 471px; text-align: center;">20</div></div><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-y-axis flot-y1-axis yAxis y1Axis"><div style="position: absolute; top: 229px; font: 400 11px/1px &quot;Open Sans&quot;,sans-serif; color: rgb(51, 51, 51); left: 11px; text-align: right;">0</div><div style="position: absolute; top: 173px; font: 400 11px/1px &quot;Open Sans&quot;,sans-serif; color: rgb(51, 51, 51); left: 11px; text-align: right;">5</div><div style="position: absolute; top: 118px; font: 400 11px/1px &quot;Open Sans&quot;,sans-serif; color: rgb(51, 51, 51); left: 5px; text-align: right;">10</div><div style="position: absolute; top: 63px; font: 400 11px/1px &quot;Open Sans&quot;,sans-serif; color: rgb(51, 51, 51); left: 5px; text-align: right;">15</div><div style="position: absolute; top: 8px; font: 400 11px/1px &quot;Open Sans&quot;,sans-serif; color: rgb(51, 51, 51); left: 5px; text-align: right;">20</div></div></div><canvas height="250" width="485" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 485px; height: 250px;" class="flot-overlay"></canvas></div>
				        </div>
			 </div>
	 	</div>
		<!-- /Grafico derecho -->

		<h6 class="heading-hr"><i class="icon-stack"></i> Registros</h6>
	
		<!-- columna-izquierda /TB-Listado sensores -->
		<div class="col-md-5">

					<div class="datatable-header">

						<div id="DataTables_Table_0_filter" class="dataTables_filter">
							<label><span>Filter:</span> <input placeholder="Type to filter..." aria-controls="DataTables_Table_0" type="text"></label>
						</div>

						<div class="dataTables_length" id="DataTables_Table_0_length">
							<label><span>Show:</span>						 		
							 	<select class="select2-offscreen" tabindex="-1" aria-controls="DataTables_Table_0" size="1" name="DataTables_Table_0_length">
								   		<option selected="selected" value="10">10</option>
								   		<option value="25">25</option>
								   		<option value="50">50</option>
								   		<option value="100">100</option>
			 					</select>
							 </label>
						 </div>
					</div>



							    	<!-- Striped table -->
						            <div class="panel panel-default">
						                <div class="panel-heading"><h6 class="panel-title"><i class="icon-certificate"></i> Listado de Sensores</h6>
						                </div>
						                <div class="table-responsive">
							                <table class="table table-bordered">
							                    <thead>
							                        <tr>
							                            <th>#</th>
							                            <th>Sensor</th>
							                            <th>Estado</th>
							                            <th>Accion</th>
							                        </tr>
							                    </thead>
							                    <tbody>					                        
							                        <tr>
							                            <td>1</td>
							                            <td>EQ-42634</td>					                            
							                            <td class="text-center">Activo <a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a> 
							                            </td>
							                            <td class="text-center"> Up	<i class="icon-certificate"></i></td>
							                        </tr>

													<tr>
							                            <td>2</td>
							                            <td>EQ-34234</td>					                            
							                            <td class="text-center" >Reparacion  <a data-toggle="modal" role="button" href="#default-modal" class="btn btn-default btn-xs btn-icon"><i class="icon-file6"></i></a> 
							                            </td>
							                            <td class="text-center"> Up	<i class="icon-certificate"></i></td>
							                        </tr>

							                        

							                    </tbody>
							                </table>
						                </div>
							        </div>
							        <!-- /striped table -->
		</div>
		<!-- columna-izquierda /TB-Listado sensores -->

		<!-- columna-derecha /TB-Listado rutas activas -->
				<div class="col-md-7">

				<div class="datatable-header">

						<div id="DataTables_Table_0_filter" class="dataTables_filter">
							<label><span>Filter:</span> <input placeholder="Type to filter..." aria-controls="DataTables_Table_0" type="text"></label>
						</div>

						<div class="dataTables_length" id="DataTables_Table_0_length">
							<label><span>Show:</span>						 		
							 	<select class="select2-offscreen" tabindex="-1" aria-controls="DataTables_Table_0" size="1" name="DataTables_Table_0_length">
								   		<option selected="selected" value="10">10</option>
								   		<option value="25">25</option>
								   		<option value="50">50</option>
								   		<option value="100">100</option>
			 					</select>
							 </label>
						 </div>
					</div>
	



							    	<!-- Striped table -->
						            <div class="panel panel-default">
						                <div class="panel-heading"><h6 class="panel-title"><i class="icon-paragraph-justify2"></i> Rutas Activas</h6>
						                </div>
						                <div class="table-responsive">
							                <table class="table table-bordered">
							                    <thead>
							                        <tr>
							                            <th>Gate Partida</th>					                            
							                            <th>Gate Llegada</th>
							                            <th>Nro de Vuelo</th>
							                            <th>Tiempo Restante</th>
							                        </tr>
							                    </thead>
							                    <tbody>					                        
							                        <tr>
							                            <td>G-10</td>
							                            <td>G-21</td>
							                            <td>EQ-42634</td>					                            
							                            <td class="text-center" >32:13:05</td>
							                        </tr>
													<tr>
							                            <td>G-05</td>
							                            <td>G-25</td>
							                            <td>EQ-34234</td>					                            
							                            <td class="text-center" >32:13:05</td>
							                        </tr>

							                        <tr>
							                            <td>G-08</td>
							                            <td>G-27</td>
							                            <td>EQ-26542</td>					                            
							                            <td class="text-center" >32:13:05</td>
							                        </tr>

							                    </tbody>
							                </table>
						                </div>
							        </div>
							        <!-- /striped table -->
				</div>
		<!-- columna-derecha /TB-Listado rutas activas -->


	</div>  
	<!-- /page-tabs- content -->


		<!-- Footer -->
	    <div class="footer clearfix">
	        <div class="pull-left">&copy; 2013. Web Master</a></div>
	    	<div class="pull-right icons-group">
	    		<a href="#"><i class="icon-screen2"></i></a>
	    		<a href="#"><i class="icon-balance"></i></a>
	    		<a href="#"><i class="icon-cog3"></i></a>
	    	</div>
	    </div>
	    <!-- /footer -->


	</div><!-- /Page content -->

</div><!-- /Page contenedora -->

	<!-- Modal -->
<div aria-hidden="true" style="display: none;" id="default-modal" class="modal fade" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title">Modal title</h4>
						</div>

				        <!-- New invoice template -->
				        <div class="panel">
							<div class="panel-body">

								<div class="row invoice-header">
									<div class="col-sm-6">
										<h3>The Romulan Empire</h3>
										<span>Building a Better Tomorrow Through Your Destruction</span>
									</div>

									<div class="col-sm-6">
			 							<ul class="invoice-details">
											<li>Invoice # <strong class="text-danger">4759</strong></li>
											<li>Date of Invoice: <strong>01-24-2012</strong></li>
											<li>Due Date: <strong>02-10-2012</strong></li>
										</ul>
									</div>
								</div>


								<div class="row">
									<div class="col-sm-5">
										<h6>Invoice To:</h6>
			 							<ul>
											<li><a href="#">Hiram Roth</a></li>
											<li>United Federation of Planets</li>
											<li><a href="#">president.roth@ufop.uni</a></li>
											<li>2269 Elba Lane</li>
											<li>Paris</li>
											<li>France</li>
											<li>888-555-2311</li>
										</ul>
									</div>


									<div class="col-sm-4">
										<h6>Invoice From:</h6>
			 							<ul>
											<li><a href="#">Admiral Valdore</a></li>
											<li>Romulan Empire</li>
											<li><a href="#">admiral.valdore@theempire.uni</a></li>
											<li>5151 Pardek Memorial Way</li>
											<li>Krocton Segment</li>
											<li>Romulus</li>
											<li>000-555-9988</li>
										</ul>
									</div>


									<div class="col-sm-3">
										<h6>Invoice Details:</h6>
										<ul>
											<li>Total hours spent: <strong class="pull-right">379</strong></li>
											<li>Responsible: <a href="#" class="pull-right">Eugene Kopyov</a></li>
											<li>Issued by: <a href="#" class="pull-right">Jennifer Notes</a></li>
											<li>Payment method: <strong class="pull-right">Wire transfer</strong></li>
											<li class="invoice-status"><strong>Current status: <span class="label label-danger pull-right">Unpaid</span></strong></li>
										</ul>
									</div>
								</div>

							</div>


							<div class="table-responsive">
							    <table class="table table-striped table-bordered">
							        <thead>
							            <tr>
							                <th>Product</th>
							                <th>Descrition</th>
							                <th>Discount</th>
							                <th>Total</th>
							            </tr>
							        </thead>
							        <tbody>
							            <tr>
							                <td>Concept</td>
							                <td>Creating project concept and logic</td>
							                <td>0</td>
							                <td><strong>$1,100</strong></td>
							            </tr>
							            <tr>
							                <td>General design</td>
							                <td>Design prototype</td>
							                <td>0</td>
							                <td><strong>$2,000</strong></td>
							            </tr>
							            <tr>
							                <td>Front end development</td>
							                <td>Coding and connecting front end</td>
							                <td>0</td>
							                <td><strong>$1,600</strong></td>
							            </tr>
							            <tr>
							                <td>Database</td>
							                <td>Creating and connecting database</td>
							                <td>0</td>
							                <td><strong>$890</strong></td>
							            </tr>
							        </tbody>
							    </table>
							</div>

							<div class="panel-body">
								<div class="row invoice-payment">
									<div class="col-sm-8">
										<h6>Payment method:</h6>
										<label class="radio">
											<div class="choice"><span><input name="payment-unpaid" class="styled" type="radio"></span></div>
											Checkout with Google
										</label>
										<label class="radio">
											<div class="choice"><span><input name="payment-unpaid" class="styled" type="radio"></span></div>
											Checkout with Amazon
										</label>
										<label class="radio">
											<div class="choice"><span class="checked"><input name="payment-unpaid" class="styled" checked="checked" type="radio"></span></div>
											Wire transfer
										</label>
										<label class="radio">
											<div class="choice"><span><input name="payment-unpaid" class="styled" type="radio"></span></div>
											Checkout with Paypal
										</label>
										<label class="radio">
											<div class="choice"><span><input name="payment-unpaid" class="styled" type="radio"></span></div>
											Checkout with Skrill
										</label>
									</div>

									<div class="col-sm-4">
										<h6>Total:</h6>
										<table class="table">
											<tbody>
												<tr>
													<th>Subtotal:</th>
													<td class="text-right">$103,850</td>
												</tr>
												<tr>
													<th>Tax:</th>
													<td class="text-right">$5,192</td>
												</tr>
												<tr>
													<th>Total:</th>
													<td class="text-right text-danger"><h6>$109,042</h6></td>
												</tr>
											</tbody>
										</table>
										<div class="btn-group pull-right">
											<button type="button" class="btn btn-success"><i class="icon-checkbox-partial"></i> Confirm payment</button>
											<button type="button" class="btn btn-primary"><i class="icon-print2"></i> Print</button>
										</div>
									</div>
								</div>

								<h6>Notes &amp; Information:</h6>
								This invoice contains a incomplete list of items destroyed by the Federation ship Enterprise on Startdate 5401.6 in an unprovked attacked on a peaceful &amp; wholly scientific mission to Outpost 775.
								The Romulan people demand immediate compensation for the loss of their Warbird, Shuttle, Cloaking Device, and to a lesser extent thier troops.
							</div>
						</div>   
						<!-- /new invoice template -->

						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
</div>
	<!-- /Modal -->




</body>
</html>