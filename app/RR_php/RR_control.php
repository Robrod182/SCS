
<?php
//error_reporting(E_ALL ^ E_NOTICE);
include ('conexion.php');

$consulta=mysqli_query($conexion,"SELECT * FROM login");
 //El mysql_fetch_array () devuelve los registros de la tabla usuarios
 //$filas=mysqli_fetch_array($consulta);
	 while($filas = mysqli_fetch_array($consulta)){
  
   
     $usuario=$filas['email'];
     $pass=$filas['password'];
  

if ($email=$_POST['email']!=$usuario || $pasword=$_POST['password']!=$pass) {
$email=$_POST['email'];

    ?>
     <form name="formulario" method="post" action="../login.php">
         <input type="hidden" name="email" value="<?php echo $email; ?>">
      </form>
       <script type="text/javascript"> 
    //Redireccionar con el formulario creado
    document.formulario.submit();
  </script>
    <?php
}else{
	
     	session_start();
		//Declaro mis variables de sesión
		$_SESSION["autentificado"] = true;
		$_SESSION["usuario"] = $_POST['email'];

		header("Location: ../crearEncuesta.php");
    
}
	}
 ?>

 