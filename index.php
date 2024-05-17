<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Título -->
    <title>Clarity Vet</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css"/>

    <!-- Imagen favicon / acceso directo -->
    <link rel="shortcut icon" href="img/clarity-fondo.png" type="image/png"/>
</head>
<body class="body-index">
    <!-- Menú estatico -->
    <header class="menu">
        <?php
            require_once "menu.php"
        ?>
    </header>

    <div class="extension">
        <?php
            //Por default añade al documento dashboard.php o añadira otra pagina en caso de ser seleccionada.
            if (!isset($_GET['page'])){
                $page = 'inicio';
            }
            else{
                $page = $_GET['page'];
            }

            //Añade el contenido de la pagina seleccionada mediante una variable y agregando con string el dominio php
            require_once $page . '.php';   
        ?>
    </div>
</body>
</html>
