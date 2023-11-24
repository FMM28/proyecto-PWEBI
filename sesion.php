<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Usuarios</h1>
    <br>
    <?php
    require "conexion.php";
    $consulta = 'SELECT * from usuarios';
    $resultado = $conexion->query($consulta);
    $count = mysqli_num_rows($resultado); 
    echo "<table>
        <tr>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Nombre</th>
            <th>Correo Electronico</th>
            <th>Fecha de Registro</th>
            <th>Acciones</th>
        </tr>";

    if ( $count>0 ){
        //aqui se pintarian los registro de la DB
        while( $row = mysqli_fetch_assoc($resultado)  ){
        echo "<tr>";
        echo"<td>". $row['usuario'] ."</td>";
        echo"<td>". $row['contraseña'] ."</td>";
        echo"<td>". $row['nombre'] ."</td>";
        echo"<td>". $row['email'] ."</td>";
        echo"<td>". $row['fecha_registro'] ."</td>";
        echo"<td>";
        echo '<form action="eliminar_usuario.php" method="post" class="acciones">';
        echo '<input type="hidden" name="idUsuario" value="' . $row['usuario'] . '">';
        echo '<button type="submit" class="eliminar">Eliminar</button>';
        echo '</form>';
        echo '<form action="eliminar_usuario.php" method="post" class="acciones">';
        echo '<input type="hidden" name="idUsuario" value="' . $row['usuario'] . '">';
        echo '<button type="submit" class="editar">Editar</button>';
        echo '</form>';
        echo '</td>';
        echo "</tr>";
        }
        echo "</table>";

    }else{
        echo"<h1 style='color:red' >Sin Ningun registro</h1>";
        }
    ?>
    <br>
    <a href="index.php">Regresar</a>
</body>
</html>