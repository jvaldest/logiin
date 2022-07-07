<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
session_start();
$_SESSION['superlog']='usuarios';
include('conexion.php');
$consulta="SELECT * FROM `usuarios` WHERE user='$user' and pass='$pass'";
$resultado=mysqli_query($conn,$consulta);
$fila=mysqli_num_rows($resultado);
if($fila){
	?>
<?PHP
	include("home.php");
		
		
}else{
	?>
	<?php
	include("index.php");
	?>
	<h1 class="bad">errorrrrrrrrrr</h1>
	<?php
}

	
	








?>