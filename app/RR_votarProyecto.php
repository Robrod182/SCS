

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
						include("RR_php/RR_conexion.php");

					

						$consulta=mysqli_query($conexion,"SELECT nombre FROM proyecto");                    
						 $numRegistros=mysqli_num_rows($consulta);

						 if ($numRegistros==0) {
						   echo "No sean encontrado registos para mostrar";

						 }
						 /* A la variable registro por página se le asignara un valor que el valor que
						 le asignemos sera la cantidad de registrospor página que mostrara */
						 $reg_por_pagina=7;

						 //Condicion que evalua la variable que viene por GET
						if (isset($_GET['num'])) {
						  //si la variable que viene por GET existe 
						  $num_pagina=$_GET['num'];
						}else{
						  //si la variable que viene por GET no existe
						  $num_pagina = 1;
						}
						//Condicion que evalua la variable numero de pagina si es numerico
						 if(is_numeric($num_pagina))
						  /*Si la variable numero de pagina es numerico a la variable $inicio se le 
						    asignara una multiplicacion*/

						    /*A la variable numero por pagina se restara 1 por los motivos que 
						    comenzamos en la pagina 1 no en la pagina 0 para igualar los registros
						    ya que los registros comieszan a contar desde 0 por ejemplo la variable
						    numero por pagina es igual 2 se restara 1 y quedaria con le valor de 1 y se
						    multiplicara 1 x registro por pagina que equivale a 12 y el resultado seria
						    12 */
						  $inicio=($num_pagina-1)* $reg_por_pagina;
						else
						  //Si la variable numerop por pagina no es numerico
						  $inicio=0;
						//Consulta a la base de datos que limita los datos a mostrar
						 $consulta2=mysqli_query($conexion,"SELECT * FROM proyecto ORDER BY nombre ASC LIMIT $inicio, $reg_por_pagina");
						 //A la variable catidad por pagina se le asignara la division
						$can_paginas=ceil($numRegistros/$reg_por_pagina);

						?>

						<div class="header_1 wrap_3 color_3">
						                Seleccione el proyecto:
						</div>

						<section id="form" class="wrap_3">
						  <form action="RR_votarProyectoEncuesta.php" class="contact_form" name="form1" method="post">
						    <table>
						      <?php 
						       while ($row =mysqli_fetch_array($consulta2) ) {
						         $nombreProyecto=$row["nombre"];
						         $idproyecto=$row["id"];
						       

						       ?>
						       <tr>
						         <td width="50"><input type="radio" name="opcion" value="<?php echo $idproyecto; ?>" required/></td>
						         <td width="470"><?php echo $nombreProyecto; ?></td>
						       </tr>
						       <?php } ?>
						       <tr>

						         <td>

						           <input type="submit" class="btn_2" value="Ver Enc"/>
						           
						         </td>
						         <td>
						           
						         </td>
						       </tr>
						    </table>
						    <center>
						       <div id="paginador">
						          <?php 
						        /* condicion que evalua la variable numero por pagina para crear los 
						        botones */
						       if ($num_pagina>1) {
						          //Enlaces para los botones primero y anterior
						          echo "<a id='paginas1' href='RR_verEncuesta.php?num=1'>Primero</a>";
						          echo "<a id='paginas1' href='RR_verEncuesta.php?num=".($num_pagina-1)."'>Anterior</a>";
						        }
						        /*Mensaje que muestra las paginas en la que estamos navegando y 
						        cantidad de pagina que hay*/
						        echo"<strong id='paginas2'>".($num_pagina)."de".($can_paginas)."</strong>";

						        /* condicion que evalua la variable numero por pagina para crear los 
						        botones */
						        if ($num_pagina<$can_paginas) {
						          //Enlaces para los botones siguiente y ultimo
						          echo "<a id='paginas1' href='RR_verEncuesta.php?num=".($num_pagina +1)."'>Siguiente</a>";
						          echo "<a id='paginas1' href='RR_verEncuesta.php?num=".($can_paginas)."'>Ultimo</a>";
						        }
						         ?>

						       </div>
						    </center>
						  </form>
						</section>
						<center>
						  <a id="paginas1" href="javascript:window.history.back();">&laquo; Volver atrás</a>
						</center><br>

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
