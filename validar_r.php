<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
$pass2=password_hash($pass,PASSWORD_BCRYPT);
session_start();
$_SESSION['superlog']='usuarios';
include('conexion.php');

$registro="INSERT INTO `usuarios`(`user`, `pass`) VALUES ('$user','$pass2')";
$resultado=mysqli_query($conn,$registro);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>

	