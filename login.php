<?php

include('conexion.php');

$usuario=$_POST['usuario'];
$password=$_POST['pass'];

session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","bdgym");

$consulta="SELECT * FROM logins where usuario= '$usuario' and  pass='$password' ";
$resultado = mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location: usuario1.html");
}else{
?>
<?php
include("inicio.html");
?>
<h1 class="bad">ERROR EN LA AUTENTICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);