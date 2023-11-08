<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'config/Exception.php';
require 'config/PHPMailer.php';
require 'config/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'HappyPets2023Web1@gmail.com';                     //SMTP username
    $mail->Password   = 'webhappypets';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('HappyPets2023Web1@gmail.com', 'HappyPets');
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress('anthont234geo@gmail.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information'); //Para respónder un gmail

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Añadir archivos
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Nombre Opcional

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Asunto muy importante';
    $mail->Body    = 'Este es un correo de prueba';

    $mail->send();
    echo 'Mensaje se envio correctamente';
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje. Mailer Error: {$mail->ErrorInfo}";
}
?>
