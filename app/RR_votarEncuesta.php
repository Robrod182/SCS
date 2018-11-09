

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

					include("RR_sidebar_cliente.php");

				?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Responder encuesta de satisfacción</h2>
					
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
						error_reporting(E_ALL ^ E_NOTICE);
						//capturamos la variable que viene por post del archivo ver Encuesta
						$opcion = $_POST["opcion"];
						require("RR_php/RR_conexion.php");
				
						//Seleccionamos la encuesta de acuerdo a la variable $opcion
						$consulta ="SELECT * FROM encuesta WHERE id=$opcion";
						//Ahora recorremos los datos título, fecha, id de la encuesta seleccionada
						$consulta = mysqli_query($conexion,$consulta);
						while($row = mysqli_fetch_array($consulta)){
							$titulo = $row["titulo"];
							$fecha = $row["fecha"];
							$id = $row["id"];
						}

						 ?>
						 <section id="form">
						 	<form action="RR_php/RR_inserVotacion.php" class="contact_form" name="form1" method="post">
						 		<table>
						 			<tr>
						 				<!--Mostramos el titulo de la encuesta-->
						 				<td colspan="2"> <h3><?php echo $titulo; ?></h3></td>
						 				<input type="hidden" name="id" value="<?php echo $id; ?>">
						 			</tr>
						 			<?php
						 			//Consulta que captura el texto ,id de la tabla respuestas
						 			$sql ="SELECT texto, id FROM respuestas WHERE idenc='$id'";
						 			 $sql = mysqli_query($conexion,$sql);
						 			 //Ahora recorremos los datos texto, id que están vinculadas a la encuesta seleccionada
						 			 while ($row = mysqli_fetch_array($sql)) {
						 			 	$texto = $row["texto"];
						 			 	$idres = $row["id"];
						 			 
						 			 ?>
						 			 <tr>
						 			 	<td width="50"><input type="radio" name="opcion" value="<?php echo $idres; ?>" required></td>
						 			 	<!--Mostramos las respuestas de la encuesta-->
						                <td width="470"><?php echo $texto; ?></td>
						 			 </tr>
						 			 <?php } ?>
						 			 <tr>
						             <td></td>
						 			 	
						 			 	<!--Mostramos la fecha de la encuesta de la encuesta-->
						                <td>encuesta generada el <?php echo $fecha; ?></td>
						                
						 			 </tr>

						             <tr>
						                <!--boton para votar la encuesta-->
						                <td> <input class="btn_2" type="submit" value="Votar"></input>  </td>
						             </tr>

						 		</table>
						 	</form>
						 </section>
						 <center>
						    <div id="paginador">
						    	<form >
						    		<a id="paginas1" href="javascript:window.history.back();">&laquo; Volver atrás</a>
						    		
						    	</form>
						    </div>
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
