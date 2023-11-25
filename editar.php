<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="cuadro2">
        <h1>Editar usuario</h1>
        <form action="editarUsuario.php" method="post">
            <?php
            require "conexion.php";
            $usuario = $_POST['usuario'];
            $consulta = "SELECT * from usuarios where usuario='$usuario'";
            $resultado = $conexion->query($consulta);
            while( $row = mysqli_fetch_assoc($resultado)){
                echo '<input type="hidden" name="old" value="'. $usuario . '">';
                echo "<label>Usuario</label>";
                echo "<br>";
                echo "<input type='text' name='user' value='".$row['usuario']."'>";
                echo "<br>";
                echo "<label>Contraseña</label>";
                echo "<br>";
                echo "<input type='text' name='password' value='".$row['contraseña']."'>";
                echo "<br>";
                echo "<label>Nombre</label>";
                echo "<br>";
                echo "<input type='text' name='nombre' value='".$row['nombre']."'>";
                echo "<br>";
                echo "<label>Email</label>";
                echo "<br>";
                echo "<input type='text' name='email' value='".$row['email']."'>";
            }
            ?>
            <br>
            <div class='centrar'>
                <button type='submit'>Modificar</button>
            </div>
        </form>
        <a href="sesion.php">Regresar</a>
    </div>
</body>
</html>