<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Crear usuario</title>
</head>
<body>
    <div class="cuadro2">
        <h1>Crear usuario</h1>
        <form action="crearUsuario.php" method="post">
            <label>Usuario</label>
            <br>
            <input type="text" id="user" name="user" required>
            <br>
            <label>Contraseña</label>
            <br>
            <input type="password" id="password" name="password" required>
            <br>
            <label><b>Datos</b></label>
            <br>
            <label>Nombre</label>
            <br>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label>Correo</label>
            <br>
            <input type="email" placeholder="ejemplo@tucorreo.com" id="email" name="email" required>
            <br>
            <button type="submit">Crear</button>
        </form>
        <a href="index.php">Ya tienes un usuario?</a>
    </div>
    <br>
    <div class="mensaje">
        <?php

        session_start();

        if (isset($_SESSION['mensaje'])) {
            echo $_SESSION['mensaje'];
            unset($_SESSION['mensaje']);
        }
        ?>
    </div>
</body>
</html>