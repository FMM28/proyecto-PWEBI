<?php
require "conexion.php"
mysqli_set_charset($conexion,'utf8');
$usuario =$_POST['user'];
$password =$_POST['password'];
$consulta="SELECT * from usuarios where usuario = $usuario and contraseña = $password";

$resultado = $conexion->query($consulta);

?>
