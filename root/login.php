<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Iniciar sesión: Clarity Pet</title>
</head>
<body class="body-login">
    <div class="contenedor-iniciar-sesion">
        <!-- Logo -->
        <img src="../img/clarity.png" alt="No image" title="Clarity Pet">

        <!-- Formulario -->
        <form action="comprobacion.php" method="POST">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" placeholder="Usuario..."
            autocomplete="on" required>

            <label for="password">Contraseña:</label>
            <input type="text" id="password" name="password" placeholder="Contraseña..."
            autocomplete="off" required>
            
            <button type="submit" id="enviar" name="enviar">Enviar</button>
        </form>

        <!-- Link de contraseña olvidada -->
        <a href="#">¿Haz olvidado tu contraseña?</a>
        <a href="registro.php">Crea una cuenta</a>
    </div>
</body>
</html>