<?php 
$titulo = $_POST["titulo"];
$preguntas = $_POST["preguntas"];
$idproyecto = $_POST["idproyecto"];

//Conectamos con la base de datos
require("RR_conexion.php");

//Obtenemos la fecha del sistema
$fecha_actual = date("Y-m-d");

//Insertamos la nueva encuesta
$sql = "INSERT INTO encuesta (titulo,fecha,ID_PROYECTO) VALUES ('$titulo','$fecha_actual','$idproyecto')";
$sql = mysqli_query($conexion,$sql);

//Ahora obtenemos la Id de la encuesta que acabamos de insertar
$sql = "SELECT id FROM encuesta ORDER BY fecha";
$sql = mysqli_query($conexion,$sql);
while($row = mysqli_fetch_array($sql)){
	$id = $row["id"];
}
//Recorremos todas las preguntas
for ($i=1; $i <=$preguntas; $i++) { 
    //Obtenemos el texto de la pregunta
    $preg = p.$i;
    $pas = $_POST[$preg];
    $texto = $pas;

    //Y lo insertamos
    $sql = "INSERT INTO respuestas(texto, votos, idenc) VALUES ('$texto',0,'$id')";
    $sql = mysqli_query($conexion,$sql);
}
header("Location: ../RR_crearEncuesta.php");
 ?>
 
