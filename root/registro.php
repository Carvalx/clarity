<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Iniciar sesión: Clarity Pet</title>
</head>
<body class="body-registro">
    <div class="contenedor-registro">
        <!-- Logo -->
        <img src="../img/clarity.png" alt="No image" title="Clarity Pet">

        <!-- Formulario -->
        <form action="backend/registro-usuarios.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre..."
            autocomplete="on" required>

            <label for="correo">Correo:</label>
            <input type="text" id="correo" name="correo" placeholder="Correo..."
            autocomplete="on" required>

            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" placeholder="Usuario..."
            autocomplete="on" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Contraseña..."
            autocomplete="off" required>
            
            <button type="submit" id="enviar" name="enviar">Registrarse</button>

            <a href="login.php">Iniciar sesión</a>
        </form>

        
    </div>
</body>
</html>