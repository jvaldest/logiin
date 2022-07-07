<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
session_start();
$_SESSION['superlog'];
include('conexion.php');
$consulta="SELECT * FROM `usuarios` WHERE user='$user' and pass='$pass'";
$resultado=mysqli_query($conn,$consulta);
$fila=mysqli_query($resultado);
if($fila){
	header("location::home.php");
}else{
	?>
	<?php
	include("index.php");
	?>
	<h1 class="bad">errorrrrrrrrrr</h1>
	<?php
}

	
	








?>