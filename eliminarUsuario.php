<?php
        require "conexion.php";
        $usuario = $_POST['usuario'];
        $consulta = "DELETE FROM usuarios WHERE usuario = '$usuario'";
        $resultado = $conexion->query($consulta);
        if($resultado===TRUE){
            echo "Usuario eliminado con éxito";
        } else {
            echo "Error al eliminar el usuario: " . $conexion->error;
        }
        header("Location: sesion.php");
?>