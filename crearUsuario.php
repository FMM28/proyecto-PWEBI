<?php
require "conexion.php";
$usuario =$_POST['user'];
$password =$_POST['password'];
$nombre =$_POST['nombre'];
$email =$_POST['email'];

session_start();

$prueba = "SELECT * FROM usuarios where usuario = '$usuario'";
$resultado = $conexion->query($prueba);

if ($resultado->num_rows > 0){
    $_SESSION['mensaje'] = "El usuario ya existe en la base de datos";
}else {
    $consulta = "INSERT into usuarios values ('$usuario','$password','$nombre','$email')";

    if ($conexion->query($consulta) === TRUE) {
        echo "Dato insertado correctamente.";
    } else {
        echo "Error al insertar dato: " . $conexion->error;
    }
}

header("Location: crear.php");
exit();

?>