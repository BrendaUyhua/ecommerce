<?php

include('db.php');
$nombre =$_POST['nombres'];
$apellido =$_POST['apellidos'];
$usuario =$_POST['correo'];
$passw =$_POST['pass'];
$rpassw =$_POST['rpass'];
$tipodoc =$_POST['idtipo'];
$numdoc =$_POST['documento'];

$req = (strlen($nombre)*strlen($apellido)*strlen($usuario)*strlen($passw)*strlen($rpassw)*strlen($numdoc)) or die ("No se han completado todos los campos");

if($passw != $rpassw ){
    die ("Las contraseñas no coinciden");
}

$contraseñaUsuario = md5($passw);

echo "Los datos son los siguientes: <br>";
echo "$nombre","$apellido","$usuario","$contraseñaUsuario","$tipodoc","$numdoc";

$conexion=mysqli_connect("localhost","root","","bdgym");
$sql="INSERT INTO logins (id, Nombres, Apellido, Usuario, Pass, Tipo Documento, num_doc) 
VALUES ('$nombre','$apellido','$usuario','$contraseñaUsuario','$tipodoc','$numdoc')";
$resul = mysqli_query($conexion,$sql) or trigger_error("Conexion Fallida:".mysqli_error($conexion), E_USER_ERROR);

echo "$sql";
?>

