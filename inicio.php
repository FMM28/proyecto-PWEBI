<?php
<<<<<<< HEAD
require "conexion.php";

$usuario =$_POST['user'];
$password =$_POST['password'];

=======
require "conexion.php"
mysqli_set_charset($conexion,'utf8');
$usuario =$_POST['user'];
$password =$_POST['password'];
>>>>>>> b39cc07a9943cd7781f69edb6996b188be9c9bb5
$consulta="SELECT * from usuarios where usuario = $usuario and contraseña = $password";

$resultado = $conexion->query($consulta);

<<<<<<< HEAD
echo $usuario;
echo $password;

=======
>>>>>>> b39cc07a9943cd7781f69edb6996b188be9c9bb5
?>
