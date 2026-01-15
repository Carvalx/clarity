<?php

//Usar la librería PHPMailer
use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};

//Utilizar las siguientes librerías
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";
require "PHPMailer/src/Exception.php";

//Cuando "enviar" sea validado en el formulario obtendremos las variables
if(isset($_POST["enviar"])) {
    /*echo "Funcion de condicional luego de post.<br><br>";*/                       //MENSAJE PARA MOSTRAR QUE SE ACCIONÓ EL BOTÓN ENVIAR*****
    //Variables del formulario
    $nombre = $_POST["nombreForm"];
    $asunto = $_POST["asuntoForm"];
    $correo = $_POST["correoForm"];
    $telefono = $_POST["telForm"];
    $mensaje = $_POST["textArea"];

    //Arreglo de errores
    $errores = array();

    //Filtramos cada variable
    if(empty($nombre)) {
        $errores[] = "El campo de nombre es obligatorio.";
    } else if (preg_match('/\s/', $nombre)) {
        $errores[] = "El nombre no debe contener espacios.";
    }

    if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "La dirección de correo electrónico no es valida.";
    }

    if($asunto == "") {
        $errores[] = "Debes seleccionar una opción en asunto";
    }

    if(empty($mensaje)) {
        $errores[] = "Es importante añadir un mensaje";
    }

    //Realizamos un conteo y verificamos si los errores son igual a 0
    if(count($errores) == 0) {
        /*
        *Si son igual a "0", enviaremos el siguiente mensaje, mediante una variable concatenada
        */
        $msj = "De: $nombre<br>";
        $msj .= "Telefono: $telefono<br>";
        $msj .= "Correo: <a href='mailto:$correo'>$correo</a><br>";
        $msj .= "Asunto: $asunto<br><br>";
        $msj .= "Descripción del mensaje:";
        $msj .= "<p>" .$mensaje ."</p>";
        $msj .= "---Este mensaje se ha enviado desde el sitio web Clarity Pet---";

        $reply = "Gracias por tu mensaje, $nombre. Hemos recibido tu mensaje y te responderemos pronto.";
        

        $mail = new PHPMailer(true);                                            //Indicamos que trabajaremos con Excepciones
        $confirmationMail = new PHPMailer(true);                                //Indicamos que trabajaremos con Excepciones
        //Capturamos las Excepciones con el siguiente try
        try {
            //Trabajamos con el objeto $mail
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Cambiar a DEBUG_OFF        //Mostrar errores si el correo o contraseña esta incorrecta
            $mail->isSMTP();                                                    //Indicamos el uso de este protocolo
            $mail->Host = "smtp.gmail.com";                                     //Dominio
            $mail->SMTPAuth = true;                 
            $mail->Username = "carvalxfrost@gmail.com";                         //Nuestro correo
            $mail->Password = "ptym yfdg mgpy pqrw";                            //Clave unica de app password (gmail)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                    //Revisar el Hosting dependiendo de como este habilitado
            $mail->Port = 465;                                                  //Puerto
            
            $mail->setFrom("carvalxfrost@gmail.com", "Web de Clarity Pet");     //Mostrar desde donde se envía                  *****
            $mail->addAddress("carvadel@hotmail.com", "Napo");     //Correo adicional donde llegarán los mensajes  *****
            //$mail->addReplyTo("carvadel@hotmail.com");                        //Donde va a responder el cliente

            $mail->isHTML(true);                                                //Usamos tags HTML para enviar el mensaje
            $mail->Subject = "Mensaje de contacto";                             //Titulo del mensaje
            $mail->Body = mb_convert_encoding($msj, "ISO-8859-1", "UTF-8");     //Cuerpo del mensaje

            $mail->send();                                                      //Enviar mail

            // Configuración para enviar el correo de confirmación al remitente     
            $confirmationMail->isSMTP();
            $confirmationMail->Host = "smtp.gmail.com";
            $confirmationMail->SMTPAuth = true;
            $confirmationMail->Username = "carvalxfrost@gmail.com";
            $confirmationMail->Password = "ptym yfdg mgpy pqrw";
            $confirmationMail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $confirmationMail->Port = 465;

            $confirmationMail->setFrom("carvalxfrost@gmail.com", "Web de Clarity Pet");
            $confirmationMail->addAddress($correo, $nombre);                   // Correo del remitente                          *****

            $confirmationMail->isHTML(true);
            $confirmationMail->Subject = mb_convert_encoding("Confirmación de recepción de mensaje", "ISO-8859-1", "UTF-8");
            $confirmationMail->Body = mb_convert_encoding($reply, "ISO-8859-1", "UTF-8");

            $confirmationMail->send();

            /*$confirmacion = "Correo enviado!.";*/                             //MOSTRAR EL ENVIO DEL FORMULARIO               *****
            header("Location:index.php");
        } catch (Exception $e) {
            $confirmacion = "Mensaje". $mail->ErrorInfo;                        //Mostrar errores en el mail enviado mediante Exceptions
        }
    }
} else {
    //Muestra error si se envia mal el formulario
    echo "No se efectuó correctamente el envío.";
}
?>
<?php
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
?>

<?php
if(isset($confirmacion)) {
?>
    <div class="confirmacion-php">
        <?php
            //Muestra los mensajes y el proceso de envio o errores
            echo $confirmacion;
        ?>
    </div>
<?php    
}
?>