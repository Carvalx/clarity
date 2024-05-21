<?php
//Verificar si se ha enviado el formulario correctamente
if($_SERVER["REQUEST_METHOD"] == "POST") {
    //Recoger datos del formulario
    $nombre = htmlspecialchars($_POST["nombreForm"]);
    $apellido = htmlspecialchars($_POST["apellidoForm"]);
    $correo = htmlspecialchars($_POST ["correoForm"]);
    $tel = htmlspecialchars($_POST["telForm"]);
    $consulta = htmlspecialchars($_POST["textArea"]);

    //Configuracion de destinatario y asunto del correo
    $destinario = "carvadel@hotmail.com";
    $asunto = "Consulta desde la Clarity Pet\n";


    //Cuerpo del correo
    $cuerpo = "Nombre: $nombre";

    if(!empty($apellido)) {
        $cuerpo .= "Apellido: $apellido\n";
    }

    $cuerpo .= "Correo: $correo\n";

    if(!empty($telefono)) {
        $cuerpo .= "Telefono: $tel\n";
    }

    $cuerpo .= "\nConsulta: \n$consulta";

    //Enviar el correo
    $resultado = mail($destinario, $asunto, $cuerpo);

    //Mostrar mensaje de confirmacion
    if($resultado) {
        echo "<p>¡Correo enviado correctamente!</p>";
    } else {
        echo "<p>Error al enviar el correo. Intentalo más tarde.</p>";
    }
}