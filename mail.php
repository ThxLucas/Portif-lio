<?php

$mensagem = $_GET['mensagem'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './src/vendor/autoload.php';
$mail = new PHPMailer();
try
{
    
    $mail-> SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username   = 'thexelasalss@gmail.com';
    $mail->Password   = 'aauvjdtctqlkxefb';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    
    $mail->setFrom('thexelasalss@gmail.com');
    $mail->addAddress('thexelasalss@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = "The Xelas";
    $mail->Body    = "$mensagem";
    $mail->AltBody = "$mensagem";

    $mail->send();


    
}
catch (Exception $e)
{
    echo "ERRO NO ENVIO DA MENSAGEM. Mailer Error: {$mail->ErrorInfo}";
}
?>