<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
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
        header("Location: crear.php");
        exit();
    }else {
        $consulta = "INSERT into usuarios (usuario,contraseña,nombre,email) values ('$usuario','$password','$nombre','$email')";

        if ($conexion->query($consulta) === TRUE) {
            echo "<h1>Dato insertado correctamente</h1>";
        } else {
            echo "Error al insertar dato: " . $conexion->error;
        }
    }
    ?>
    <div class='centrar'>
        <a href='index.php'><button>Regresar</button></a>
    </div>
</body>
</html>
    