<?php
$host_db="127.0.0.1";
$user_db="root";
<<<<<<< HEAD
$pass_db="";
=======
$pass_db="319192142";
>>>>>>> b39cc07a9943cd7781f69edb6996b188be9c9bb5
$db_name="proyecto_PWEBI";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no te está dando permisos para ejecutar las consultas</h1>";
} else {
    echo"<h2 style='color: greenyellow; text-align: center;'>Hola, tu conexión está funcionando.</h2>";
}
?>