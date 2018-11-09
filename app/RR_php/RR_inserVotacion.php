<?php 
$opcion = $_POST["opcion"];

require("RR_conexion.php");


if(!empty($opcion)){
	$consulta = "SELECT votos FROM respuestas WHERE id=$opcion";
	$consulta = mysqli_query($conexion,$consulta);
	while($row = mysqli_fetch_array($consulta)){
		$votos = $row["votos"];
	}

	//Incrementamos en uno los votos totales
	echo $votos = $votos + 1;
	//Y actualizamos la tabla respuestas
	$consulta = "UPDATE respuestas SET votos = $votos WHERE id = $opcion";
	mysqli_query($conexion,$consulta);
}
header("Location: ../RR_mensaje.php");
 ?>