

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST)){

require 'vistas/complementos/phpMail/Exception.php';
require 'vistas/complementos/phpMail/PHPMailer.php';
require 'vistas/complementos/phpMail/SMTP.php';


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
    $mail->setFrom('trabajosunicordobaluis@gmail.com', 'Correouni'); //quien lo envia
    $mail->addAddress($_POST['correo']);        // quien recibe
   


    // Attachments esta seccion esparaenviar archivos
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'estos son tus datos';
    $mail->Body    = "http://157.245.130.4/?coreo=".$_POST['correo'].'&ide='.$_POST['identificacion'].'&nombres='. $_POST['nombres'];


    $mail->send();
    echo 'Mensaje enviado';
} catch (Exception $e) {
    echo "hubo un error de envio: {$mail->ErrorInfo}";
}
}