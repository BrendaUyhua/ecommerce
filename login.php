<?php

include('conexion.php');

$usuario=$_POST['usuario'];
$password=$_POST['pass'];

session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","bdgym");

$consulta="SELECT * FROM login where usuario= '$usuario' and  password='$password' ";
$resultado = mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location: home.php");
}else{
?>
<?php
include("index.html");
?>
<h1 class="bad">ERROR EN LA AUTENTICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);