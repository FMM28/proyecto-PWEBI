<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Eliminar usuarios</h1>
    <div class="cuadro3">
        <?php
        require "conexion.php";
        $usuario = $_POST['usuario'];
        $consulta = "SELECT * from usuarios where usuario='$usuario'";
        $resultado = $conexion->query($consulta);
        while( $row = mysqli_fetch_assoc($resultado)  ){
            echo 'Usuario: '.$row['usuario'];
            echo '<br>';
            echo 'Contraseña: '.$row['contraseña'];
            echo '<br>';
            echo 'Nombre: '.$row['nombre'];
            echo '<br>';
            echo 'Correo: '.$row['email'];
            echo '<br>';
            echo 'Fecha de registro: '.$row['fecha_registro'];
        }
        echo '</div>';
        echo '<h2>Seguro que quieres eliminar este usuario?</h2>';
        echo "<div class='alinea'>";
        echo '<form action="eliminarUsuario.php" method="post">';
        echo '<input type="hidden" name="usuario" value="'. $usuario . '">';
        echo "<button type='submit' class='eliminar'>Eliminar</button>";
        echo '</form>';
        echo "<a href='sesion.php'><button class='cancelar'>Cancelar</button></a>";
        echo '</div>';
        ?>
   
    
</body>
</html>