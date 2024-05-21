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

    <!-- Contenido de la pagina a la que se redirige -->
    <div class="extension">
        <?php
            //Por default añade al documento inicio.php o añadira otra pagina en caso de ser seleccionada.
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

    <!-- Pie de pagina -->
    <footer>
            <?php
                if (!isset($_GET['page'])){
                    $page = 'inicio';
                    require_once "formulario.php";
                    require_once "footer.php";
                } 
                else {
                $page = $_GET['page'];
                
                if($page != 'acerca-nosotros' && $page != 'donar-adoptar') {
                   require_once "formulario.php";
                }
                require_once "footer.php";
                }
            ?>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
