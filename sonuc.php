<?php
header("Content-type:text/html; charset=UTF-8");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mailgonder = new PHPMailer(true);

try {
    //Server settings
    $mailgonder->SMTPDebug = 2;                      //Debug çıktısı(0 kapalı 2 detaylı)
    $mailgonder->isSMTP();                                            //Send using SMTP
    $mailgonder->Host       = '';                     //kullanılan smtp adresi
    $mailgonder->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mailgonder->Username   = '';                     //SMTP username
    $mailgonder->Password   = '';                               //SMTP password
    $mailgonder->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mailgonder->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mailgonder->setFrom('from@example.com', 'Mailer');
    $mailgonder->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mailgonder->addAddress('ellen@example.com');               //Name is optional
    $mailgonder->addReplyTo('info@example.com', 'Information');
    $mailgonder->addCC('cc@example.com');
    $mailgonder->addBCC('bcc@example.com');

    //Attachments
    $mailgonder->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mailgonder->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mailgonder->isHTML(true);                                  //Set email format to HTML
    $mailgonder->Subject = 'Here is the subject';
    $mailgonder->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mailgonder->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mailgonder->send();
    echo 'Mail Gönderim Hatası';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>