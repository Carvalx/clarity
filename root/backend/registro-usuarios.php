<?php
    include "conexion-backend.php";

    if (isset($_POST["enviar"])) {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];

        $errores = array();

        if(preg_match('/\s/', $nombre)){
            $errores[] = "El nombre no debe contener espacios.";
        } else if (empty($nombre)){
            $errores[] = "El nombre es obligatorio.";
        }

        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores[] = "Debes introducir un correo valido.";
        }

        if(preg_match('/\s/', $usuario)){
            $errores[] = "El usuario no debe contener espacios.";
        } else if (empty($usuario)){
            $errores[] = "El usuario es obligatorio.";
        }

        if(preg_match('/\s/', $password)){
            $errores[] = "El password no debe contener espacios.";
        } else if (empty($password)){
            $errores[] = "El password es obligatorio.";
        }

        if(count($errores) == 0) {
            $usuario = "INSERT INTO usuarios(nombre, correo, usuario, contrasenya)
                    VALUES ('$nombre', '$correo', '$usuario', '$password')";

            $insertarUsuario = mysqli_query($conexion, $usuario);

            if($insertarUsuario) {
                echo '
                <script>
                    alert("Se ha añadido el usuario correctamente.");
                    window.location = "../login.php";
                </script>
                ';
            } else {
                echo '
                <script>
                    alert("No se ha añadido el usuario correctamente. Intentalo de nuevo.");
                    window.location = "../login.php";
                </script>
                ';
            }
        } else {
            echo "No se añadió al usuario. Errores en la información.";
        }

        mysqli_close($conexion);
    }
?>

<?php
//Observar los errores cuando se introduce mal un dato.
/*
if(isset($errores)) {
    if(count($errores) > 0) {
?>
    <div class="errores-php">
        <?php
            //Itera en los "errores" uno por uno y busca errores
            foreach($errores as $error) {
                //Muestra los errores
                echo $error. "<br>"; 
            }
        ?>
    </div>
<?php    
    }
}
*/?>