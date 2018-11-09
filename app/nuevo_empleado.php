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

                    include("sidebar.php");

                ?>

    <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Nuevo Empleado</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="">
                                        <i class="fa fa-users"></i>
                                    </a>
                                </li>
                                <li><span>Equipos de Trabajo / Nuevo Empleado</span></li>
                            </ol>
                    
                            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>


                    <section id="form">
                        <form action="registrarempleado.php" method="post">
	                       <div class="form-row">
		                      <div class="form-group col-md-6">
			                     <label for="inDPI">DPI</label>
			                         <input type= "text" class="form-control" name="inDPI" placeholder="Ingrese numero de DPI">
		                      </div>

		                      <div class="form-group col-md-6">
			<label for="inNIT">NIT</label>
			<input type="text" class="form-control" name="inNIT" placeholder="Ingrese numero de NIT">
		</div>
	</div>



    <div class="form-row">
        <div class="form-group col">
        	<label for="inPNombre">Primer Nombre:</label>
        	<input name="inPNombre" class="form-control" type="text" placeholder="Primer Nombre">
        </div>
        <div class="form-group col">
        	<label for="inSNombre">Segundo Nombre:</label>
        	<input name="inSNombre" class="form-control" type="text" placeholder="Segundo Nombre">
        </div>
        <div class="form-group col">
        	<label for="inPApellnameo">Primer Apellnameo:</label>
        	<input name="inPApellnameo" class="form-control" type="text" placeholder="Primer Apellido">
        </div>
        <div class="form-group col">
        	<label for="inSApellido">Segundo Apellnameo:</label>
        	<input name="inSApellido" class="form-control" type="text" placeholder="Segundo Apellido">
        </div>
    </div>

    <div class="form-row">
    	<div class="form-group col">
    		<label for="inFNacimiento">Fecha Nacimiento:</label>
    		<input name="inFNacimiento" class="form-control" type="date">
    	</div>
    	<div class="form-group col">
    		<label for="inSexo">Sexo:</label>
    		<select class="form-control" name="inSexo">
    		<option selected>Genero...</option>
    		<option value="Hombre">Hombre</option>
    		<option value="Mujer">Mujer</option>
    		</select>
    	</div>
    	<div class="form-group col">
    		<label for"inNacionalidad">Nacionalidad</label>
    		<select class="form-control" name="inNacionalidad">
<option selected>Elegir opción</option>
<option value="Afganistán" name="AF">Afganistán</option>
<option value="Albania" name="AL">Albania</option>
<option value="Alemania" name="DE">Alemania</option>
<option value="Andorra" name="AD">Andorra</option>
<option value="Angola" name="AO">Angola</option>
<option value="Anguila" name="AI">Anguila</option>
<option value="Antártnamea" name="AQ">Antártnamea</option>
<option value="Antigua y Barbuda" name="AG">Antigua y Barbuda</option>
<option value="Antillas holandesas" name="AN">Antillas holandesas</option>
<option value="Arabia Saudí" name="SA">Arabia Saudí</option>
<option value="Argelia" name="DZ">Argelia</option>
<option value="Argentina" name="AR">Argentina</option>
<option value="Armenia" name="AM">Armenia</option>
<option value="Aruba" name="AW">Aruba</option>
<option value="Australia" name="AU">Australia</option>
<option value="Austria" name="AT">Austria</option>
<option value="Azerbaiyán" name="AZ">Azerbaiyán</option>
<option value="Bahamas" name="BS">Bahamas</option>
<option value="Bahrein" name="BH">Bahrein</option>
<option value="Bangladesh" name="BD">Bangladesh</option>
<option value="Barbados" name="BB">Barbados</option>
<option value="Bélgica" name="BE">Bélgica</option>
<option value="Belice" name="BZ">Belice</option>
<option value="Benín" name="BJ">Benín</option>
<option value="Bermudas" name="BM">Bermudas</option>
<option value="Bhután" name="BT">Bhután</option>
<option value="Bielorrusia" name="BY">Bielorrusia</option>
<option value="Birmania" name="MM">Birmania</option>
<option value="Bolivia" name="BO">Bolivia</option>
<option value="Bosnia y Herzegovina" name="BA">Bosnia y Herzegovina</option>
<option value="Botsuana" name="BW">Botsuana</option>
<option value="Brasil" name="BR">Brasil</option>
<option value="Brunei" name="BN">Brunei</option>
<option value="Bulgaria" name="BG">Bulgaria</option>
<option value="Burkina Faso" name="BF">Burkina Faso</option>
<option value="Burundi" name="BI">Burundi</option>
<option value="Cabo Verde" name="CV">Cabo Verde</option>
<option value="Camboya" name="KH">Camboya</option>
<option value="Camerún" name="CM">Camerún</option>
<option value="Canadá" name="CA">Canadá</option>
<option value="Chad" name="TD">Chad</option>
<option value="Chile" name="CL">Chile</option>
<option value="China" name="CN">China</option>
<option value="Chipre" name="CY">Chipre</option>
<option value="Ciudad estado del Vaticano" name="VA">Ciudad estado del Vaticano</option>
<option value="Colombia" name="CO">Colombia</option>
<option value="Comores" name="KM">Comores</option>
<option value="Congo" name="CG">Congo</option>
<option value="Corea" name="KR">Corea</option>
<option value="Corea del Norte" name="KP">Corea del Norte</option>
<option value="Costa del Marfíl" name="CI">Costa del Marfíl</option>
<option value="Costa Rica" name="CR">Costa Rica</option>
<option value="Croacia" name="HR">Croacia</option>
<option value="Cuba" name="CU">Cuba</option>
<option value="Dinamarca" name="DK">Dinamarca</option>
<option value="Djibouri" name="DJ">Djibouri</option>
<option value="Dominica" name="DM">Dominica</option>
<option value="Ecuador" name="EC">Ecuador</option>
<option value="Egipto" name="EG">Egipto</option>
<option value="El Salvador" name="SV">El Salvador</option>
<option value="Emiratos Arabes Unnameos" name="AE">Emiratos Arabes Unnameos</option>
<option value="Eritrea" name="ER">Eritrea</option>
<option value="Eslovaquia" name="SK">Eslovaquia</option>
<option value="Eslovenia" name="SI">Eslovenia</option>
<option value="España" name="ES">España</option>
<option value="Estados Unnameos" name="US">Estados Unnameos</option>
<option value="Estonia" name="EE">Estonia</option>
<option value="c" name="ET">Etiopía</option>
<option value="Ex-República Yugoslava de Macedonia" name="MK">Ex-República Yugoslava de Macedonia</option>
<option value="Filipinas" name="PH">Filipinas</option>
<option value="Finlandia" name="FI">Finlandia</option>
<option value="Francia" name="FR">Francia</option>
<option value="Gabón" name="GA">Gabón</option>
<option value="Gambia" name="GM">Gambia</option>
<option value="Georgia" name="GE">Georgia</option>
<option value="Georgia del Sur y las islas Sandwich del Sur" name="GS">Georgia del Sur y las islas Sandwich del Sur</option>
<option value="Ghana" name="GH">Ghana</option>
<option value="Gibraltar" name="GI">Gibraltar</option>
<option value="Granada" name="GD">Granada</option>
<option value="Grecia" name="GR">Grecia</option>
<option value="Groenlandia" name="GL">Groenlandia</option>
<option value="Guadalupe" name="GP">Guadalupe</option>
<option value="Guam" name="GU">Guam</option>
<option value="Guatemala" name="GT">Guatemala</option>
<option value="Guayana" name="GY">Guayana</option>
<option value="Guayana francesa" name="GF">Guayana francesa</option>
<option value="Guinea" name="GN">Guinea</option>
<option value="Guinea Ecuatorial" name="GQ">Guinea Ecuatorial</option>
<option value="Guinea-Bissau" name="GW">Guinea-Bissau</option>
<option value="Haití" name="HT">Haití</option>
<option value="Holanda" name="NL">Holanda</option>
<option value="Honduras" name="HN">Honduras</option>
<option value="Hong Kong R. A. E" name="HK">Hong Kong R. A. E</option>
<option value="Hungría" name="HU">Hungría</option>
<option value="India" name="IN">India</option>
<option value="Indonesia" name="name">Indonesia</option>
<option value="Irak" name="IQ">Irak</option>
<option value="Irán" name="IR">Irán</option>
<option value="Irlanda" name="IE">Irlanda</option>
<option value="Isla Bouvet" name="BV">Isla Bouvet</option>
<option value="Isla Christmas" name="CX">Isla Christmas</option>
<option value="Isla Heard e Islas McDonald" name="HM">Isla Heard e Islas McDonald</option>
<option value="Islandia" name="IS">Islandia</option>
<option value="Islas Caimán" name="KY">Islas Caimán</option>
<option value="Islas Cook" name="CK">Islas Cook</option>
<option value="Islas de Cocos o Keeling" name="CC">Islas de Cocos o Keeling</option>
<option value="Islas Faroe" name="FO">Islas Faroe</option>
<option value="Islas Fiyi" name="FJ">Islas Fiyi</option>
<option value="Islas Malvinas Islas Falkland" name="FK">Islas Malvinas Islas Falkland</option>
<option value="Islas Marianas del norte" name="MP">Islas Marianas del norte</option>
<option value="Islas Marshall" name="MH">Islas Marshall</option>
<option value="Islas menores de Estados Unnameos" name="UM">Islas menores de Estados Unnameos</option>
<option value="Islas Palau" name="PW">Islas Palau</option>
<option value="Islas Salomón" d="SB">Islas Salomón</option>
<option value="Islas Tokelau" name="TK">Islas Tokelau</option>
<option value="Islas Turks y Caicos" name="TC">Islas Turks y Caicos</option>
<option value="Islas Vírgenes EE.UU." name="VI">Islas Vírgenes EE.UU.</option>
<option value="Islas Vírgenes Reino Unnameo" name="VG">Islas Vírgenes Reino Unnameo</option>
<option value="Israel" name="IL">Israel</option>
<option value="Italia" name="IT">Italia</option>
<option value="Jamaica" name="JM">Jamaica</option>
<option value="Japón" name="JP">Japón</option>
<option value="Jordania" name="JO">Jordania</option>
<option value="Kazajistán" name="KZ">Kazajistán</option>
<option value="Kenia" name="KE">Kenia</option>
<option value="Kirguizistán" name="KG">Kirguizistán</option>
<option value="Kiribati" name="KI">Kiribati</option>
<option value="Kuwait" name="KW">Kuwait</option>
<option value="Laos" name="LA">Laos</option>
<option value="Lesoto" name="LS">Lesoto</option>
<option value="Letonia" name="LV">Letonia</option>
<option value="Líbano" name="LB">Líbano</option>
<option value="Liberia" name="LR">Liberia</option>
<option value="Libia" name="LY">Libia</option>
<option value="Liechtenstein" name="LI">Liechtenstein</option>
<option value="Lituania" name="LT">Lituania</option>
<option value="Luxemburgo" name="LU">Luxemburgo</option>
<option value="Macao R. A. E" name="MO">Macao R. A. E</option>
<option value="Madagascar" name="MG">Madagascar</option>
<option value="Malasia" name="MY">Malasia</option>
<option value="Malawi" name="MW">Malawi</option>
<option value="Maldivas" name="MV">Maldivas</option>
<option value="Malí" name="ML">Malí</option>
<option value="Malta" name="MT">Malta</option>
<option value="Marruecos" name="MA">Marruecos</option>
<option value="Martinica" name="MQ">Martinica</option>
<option value="Mauricio" name="MU">Mauricio</option>
<option value="Mauritania" name="MR">Mauritania</option>
<option value="Mayotte" name="YT">Mayotte</option>
<option value="México" name="MX">México</option>
<option value="Micronesia" name="FM">Micronesia</option>
<option value="Moldavia" name="MD">Moldavia</option>
<option value="Mónaco" name="MC">Mónaco</option>
<option value="Mongolia" name="MN">Mongolia</option>
<option value="Montserrat" name="MS">Montserrat</option>
<option value="Mozambique" name="MZ">Mozambique</option>
<option value="Namibia" name="NA">Namibia</option>
<option value="Nauru" name="NR">Nauru</option>
<option value="Nepal" name="NP">Nepal</option>
<option value="Nicaragua" name="NI">Nicaragua</option>
<option value="Níger" name="NE">Níger</option>
<option value="Nigeria" name="NG">Nigeria</option>
<option value="Niue" name="NU">Niue</option>
<option value="Norfolk" name="NF">Norfolk</option>
<option value="Noruega" name="NO">Noruega</option>
<option value="Nueva Caledonia" name="NC">Nueva Caledonia</option>
<option value="Nueva Zelanda" name="NZ">Nueva Zelanda</option>
<option value="Omán" name="OM">Omán</option>
<option value="Panamá" name="PA">Panamá</option>
<option value="Papua Nueva Guinea" name="PG">Papua Nueva Guinea</option>
<option value="Paquistán" name="PK">Paquistán</option>
<option value="Paraguay" name="PY">Paraguay</option>
<option value="Perú" name="PE">Perú</option>
<option value="Pitcairn" name="PN">Pitcairn</option>
<option value="Polinesia francesa" name="PF">Polinesia francesa</option>
<option value="Polonia" name="PL">Polonia</option>
<option value="Portugal" name="PT">Portugal</option>
<option value="Puerto Rico" name="PR">Puerto Rico</option>
<option value="Qatar" name="QA">Qatar</option>
<option value="Reino Unnameo" name="UK">Reino Unnameo</option>
<option value="República Centroafricana" name="CF">República Centroafricana</option>
<option value="República Checa" name="CZ">República Checa</option>
<option value="República de Sudáfrica" name="ZA">República de Sudáfrica</option>
<option value="República Democrática del Congo Zaire" name="CD">República Democrática del Congo Zaire</option>
<option value="República Dominicana" name="DO">República Dominicana</option>
<option value="Reunión" name="RE">Reunión</option>
<option value="Ruanda" name="RW">Ruanda</option>
<option value="Rumania" name="RO">Rumania</option>
<option value="Rusia" name="RU">Rusia</option>
<option value="Samoa" name="WS">Samoa</option>
<option value="Samoa occnameental" name="AS">Samoa occnameental</option>
<option value="San Kitts y Nevis" name="KN">San Kitts y Nevis</option>
<option value="San Marino" name="SM">San Marino</option>
<option value="San Pierre y Miquelon" name="PM">San Pierre y Miquelon</option>
<option value="San Vicente e Islas Granadinas" name="VC">San Vicente e Islas Granadinas</option>
<option value="Santa Helena" name="SH">Santa Helena</option>
<option value="Santa Lucía" name="LC">Santa Lucía</option>
<option value="Santo Tomé y Príncipe" name="ST">Santo Tomé y Príncipe</option>
<option value="Senegal" name="SN">Senegal</option>
<option value="Serbia y Montenegro" name="YU">Serbia y Montenegro</option>
<option value="Sychelles" name="SC">Seychelles</option>
<option value="Sierra Leona" name="SL">Sierra Leona</option>
<option value="Singapur" name="SG">Singapur</option>
<option value="Siria" name="SY">Siria</option>
<option value="Somalia" name="SO">Somalia</option>
<option value="Sri Lanka" name="LK">Sri Lanka</option>
<option value="Suazilandia" name="SZ">Suazilandia</option>
<option value="Sudán" name="SD">Sudán</option>
<option value="Suecia" name="SE">Suecia</option>
<option value="Suiza" name="CH">Suiza</option>
<option value="Surinam" name="SR">Surinam</option>
<option value="Svalbard" name="SJ">Svalbard</option>
<option value="Tailandia" name="TH">Tailandia</option>
<option value="Taiwán" name="TW">Taiwán</option>
<option value="Tanzania" name="TZ">Tanzania</option>
<option value="Tayikistán" name="TJ">Tayikistán</option>
<option value="Territorios británicos del océano Indico" name="IO">Territorios británicos del océano Indico</option>
<option value="Territorios franceses del sur" name="TF">Territorios franceses del sur</option>
<option value="Timor Oriental" name="TP">Timor Oriental</option>
<option value="Togo" name="TG">Togo</option>
<option value="Tonga" name="TO">Tonga</option>
<option value="Trinnamead y Tobago" name="TT">Trinnamead y Tobago</option>
<option value="Túnez" name="TN">Túnez</option>
<option value="Turkmenistán" name="TM">Turkmenistán</option>
<option value="Turquía" name="TR">Turquía</option>
<option value="Tuvalu" name="TV">Tuvalu</option>
<option value="Ucrania" name="UA">Ucrania</option>
<option value="Uganda" name="UG">Uganda</option>
<option value="Uruguay" name="UY">Uruguay</option>
<option value="Uzbekistán" name="UZ">Uzbekistán</option>
<option value="Vanuatu" name="VU">Vanuatu</option>
<option value="Venezuela" name="VE">Venezuela</option>
<option value="Vietnam" name="VN">Vietnam</option>
<option value="Wallis y Futuna" name="WF">Wallis y Futuna</option>
<option value="Yemen" name="YE">Yemen</option>
<option value="Zambia" name="ZM">Zambia</option>
<option value="Zimbabue" name="ZW">Zimbabue</option>
</select>
		</div>
	</div>


	<div class="form-row">
        <div class="form-group col">
        	<label for="inTelefono">Telefono Movil:</label>
        	<input name="inTelefono" class="form-control" type="text" placeholder="(+502)">
        </div>
        <div class="form-group col">
        	<label for="inTelefonoCasa">Telefono Residencial:</label>
        	<input name="inTelefonoCasa" class="form-control" type="text" placeholder="(+502)">
        </div>
        <div class="form-group col">
        	<label for="inCorreo">Correo Electronico:</label>
        	<div class="input-group mb-2">
        	 <input type="text" class="form-control" name="inCorreo" placeholder="Usuario">
        	<div class="input-group-prepend">
          		<div class="input-group-text">@ejemplo.com</div>
        	</div>
      		</div>
      	</div>
        <div class="form-group col">
    		<label for="inEstadoCivil">Estado Civil:</label>
    		<select class="form-control" name="inEstadoCivil">
    		<option selected>Seleccione...</option>
    		<option value="Soltero">Solter@</option>
    		<option value="Casado">Casad@</option>
    		<option value="Viudo">Viud@</option>
    		</select>
    	</div>
    </div>


    <div class="form-row">
    	<div class="form-group col">
    		<label for="inDireccion">Direccion:</label>
    		<input name="inDireccion" class="form-control" type="text" placeholder="1ra Calle 1ra Avenida Zona 0">
    	</div>
    	<div class="form-group col">
    		<label for="inAldea">Aldea:</label>
    		<input name="inAldea" class="form-control" type="text">
    	</div>
    	<div class="form-group col">
    		<label for="inMunicipio">Municipio:</label>
    		<input name="inMunicipio" class="form-group" type="text">
    	</div>
    	<div class="form-group col">
    		<label for="inDepartamento">Departamento:</label>
    		<input name="inDepartamento" class="form-control" type="text">
    	</div>
    </div>




    	<div class="form-row">
    		<div class="form-group">
            <input class="btn btn-default" name="btnguardar" type="submit" value="Registrar Nuevo Empleado">
           </div>
           </div>
</form>
</section>

</section>