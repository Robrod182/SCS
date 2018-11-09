

	<?php

		include("basics.php");


	?>
	<body>
		<section class="body">

			<!-- start: header -->
			<?php 

			include("header.php");

			?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php 

					include("RR_sidebar_admin.php");

				?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Resultados de la encuesta</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Encuestas</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

						
						
					<div class="panel-body">

						

							<?php 
						
							require("RR_php/RR_conexion.php");

							$opcion = $_POST["opcion2"];
							$titulo = $_POST["titulo"];

							 ?>

							 <script type="text/javascript" src="https://www.google.com/jsapi">
							 </script>
							 <script type="text/javascript">
							   // Carga el API de Visualizacion y el paquete del gráfico 
							   google.load('visualization','1.0',{'packages':['corechart']});
							   // Cuando la API de Visualización de Google está cargada llama a la función dibujaGrafico.
							   google.setOnLoadCallback(dibujaGrafico);
							   function dibujaGrafico(){
							   	   // Crea la tabla de datos.
							   	   var datos = new google.visualization.DataTable();
							   	   datos.addColumn('string', 'Nombre');
							   	   datos.addColumn('number', 'Id');
							   	   datos.addRows([


							   	   	<?php 
							           //Cónsulta para la tabla encuestas para capturar el título de la encuesta seleccionada 
							   	   	$consulta = "SELECT titulo FROM encuesta WHERE id = $opcion";
							   	   	$consulta = mysqli_query($conexion,$consulta);
							   	   	while($row = mysqli_fetch_array($consulta)){
							   	   		$titulo = $row['titulo'];
							   	   	}
							        
							        //Cónsulta para la tabla respuestas para capturar los votos y el texto 
							        $consulta = "SELECT votos, texto FROM respuestas WHERE idenc = $opcion";
							        $resultado = mysqli_query($conexion,$consulta);
							        $numerodeFilas = mysqli_num_rows($resultado);

							        $i = 0;
							        while($fila = mysqli_fetch_array($resultado)){
							        	$i++;
							        	if ($i < $numerodeFilas) {
							        		echo "['".$fila['texto']."',".$fila['votos']."],\n";
							        	}else{
							        		echo "['".$fila['texto']."',".$fila['votos']."],\n";
							        	}
							        }
							        mysqli_close($conexion);
							   	   	 ?>]);
							   	   // Opciones del gráfico
							   	   var opciones = {'title': 'Votaciones',
							       'max-width' : 630,
							       'max-heigth' : 350};
							       // Crear y dibuja el gráfico
							       var grafico = new google.visualization.PieChart(document.getElementById('capaGrafico'));
							       grafico.draw(datos, opciones);

							   }
							 </script>
							<section id="form">
							  <div class="header_1 wrap_2 color_2">
							                 <?php echo  $titulo ?>
							            </div>
							 	
							 	<div id="capaGrafico"></div>
							 </section>
							 <style>
							     #center{
							     	margin: -10px;
							     	padding: 0px 0px 20px;
							     }
							  </style>

		
							<center id="center">
								 <a id="paginas1" href="javascript:window.history.go(-2);;">&laquo; Volver atrás</a>
							</center>

					<!-- start: page -->

						




					
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="assets/vendor/flot/jquery.flot.js"></script>
		<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="assets/vendor/raphael/raphael.js"></script>
		<script src="assets/vendor/morris/morris.js"></script>
		<script src="assets/vendor/gauge/gauge.js"></script>
		<script src="assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
