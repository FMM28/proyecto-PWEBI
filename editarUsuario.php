<?php
require "conexion.php";
$old=$_POST['old'];
$usuario=$_POST['user'];
$password=$_POST['password'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];

$consulta = "UPDATE usuarios set usuario = '$usuario', contraseña = '$password', nombre = '$nombre', email = '$email' where usuario = '$old'";
$resultado = $conexion->query($consulta);

header("Location: sesion.php");
?>