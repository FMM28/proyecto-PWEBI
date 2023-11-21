<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "conexion.php";
    
    session_start();

    mysqli_set_charset($conexion,'utf8');
    $usuario =$_POST['user'];
    $password =$_POST['password'];
    $consulta="SELECT * from usuarios where usuario = '$usuario' and contraseña = '$password'";

    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows > 0){
        echo "Usuario encontrado";
    }else {
        $consulta="SELECT * from usuarios where usuario = '$usuario'";
        $resultado = $conexion->query($consulta);
        if ($resultado->num_rows > 0){
            $_SESSION['mensaje'] = "Contraseña incorrecta";
        }else{
            $_SESSION['mensaje'] = "El usuario no existe en la base de datos";
        }
        header("Location: index.php");
        exit();
    }

    

    ?>
</body>
</html>

