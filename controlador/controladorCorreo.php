

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vistas/complementos/phpMail/Exception.php';
require 'vistas/complementos/phpMail/PHPMailer.php';
require 'vistas/complementos/phpMail/SMTP.php';

class ControladorCorreo
{





    function enviarMail($post)

    {




        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'trabajosunicordobaluis@gmail.com';                     // SMTP username
            $mail->Password   = 'adcuwjqncphpvflt';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('trabajosunicordobaluis@gmail.com', 'Correo De Suscripcion a la Aplicacion de Lecturas'); //quien lo envia
            $mail->addAddress($post['correo']);        // quien recibe



            // Attachments esta seccion esparaenviar archivos
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $recursivo = new ControladorCorreo;
            
            $id = $recursivo->encryptar($post['identificacion']);
            $nombres = $recursivo->encryptar($post['nombres']);
            $apellidos = $recursivo->encryptar($post['apellidos']);
            $grado = $recursivo->encryptar($post['grado']);
            $correo = $recursivo->encryptar($post['correo']);
            $contra = $recursivo->encryptar($post['clave']);
            $cod = $recursivo->encryptar($post['codigo']);
            $rol = $recursivo->encryptar($post['rol']);

            $body='<a href="http://localhost/desarrollo/proyectofin/desarrollo/index.php?accion=autenticar&id=' . $id."&nombres=" . $nombres."&ap=" .$apellidos."&gr=" . $grado."&correo=" . $correo  . "&co=" . $contra ."&cod=" . $cod. "&r=" . $rol."&=". ' class="button"> has Click para Validar inscripcion en la App</a>';
           
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Enlace Para Completar Registro';
            $mail->Body    = $body;


            $mail->send();
            require ("vistas/vistaIrGmail.php");
        } catch (Exception $e) {
            echo "hubo un error de envio: {$mail->ErrorInfo}";
        }
    }




    //funcion de encriptacion de datos

    function encryptar($string)
    {


        $encrypt_method = 'AES-256-CBC';
        $secret_key = 'WS-try1234???&56+s';
        $secret_iv = 'WS-647?¿@tryw567%';

        $output = FALSE;
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
        return $output;
    }

    //funcion de decriptacion de datos

    function decryptar($string)
    {
        $encrypt_method = 'AES-256-CBC';
        $secret_key = 'WS-try1234???&56+s';
        $secret_iv = 'WS-647?¿@tryw567%';
        $output = FALSE;
        $key = hash('sha256',  $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        return $output;
    }
}
