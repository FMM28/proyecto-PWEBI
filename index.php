<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="cuadro">
        <h1>Inicio de sesion</h1>
        <form action="inicio.php" method="post">
            <input type="text" placeholder="Usuario" name="user" required>
            <br>
            <input type="password" placeholder="Contraseña" name="password" required>
            <br>
            <button type="submit">Entrar</button>
        </form>
        <a href="crear.php" class="nuevo">No tienes un usuario?</a>
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