<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

$_SESSION['previous'] = 'http://'. $_SERVER[HTTP_HOST]. $_SERVER[REQUEST_URI];

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$visitor_email = $_POST['uid-email'];
$message = $_POST['message'];

$email_from = "noreply@cubedtronics.com";

$email_subject = "Help Request";



$email_body = "First Name: $firstname<br>Last Name: $lastname<br>".
"Email: $visitor_email<br>".
"Message: <br>$message<br>";

$altemail_body = "\n First Name: $firstname \nLast Name: $lastname\n".
"Email: $visitor_email\n".
"Message: \n$message\n";


try {

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'ssl://mail.cubedtronics.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'help@cubedtronics.com';
    $mail->Password   = '6XBE32f565!';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 465;

    $mail->setFrom($email_from);
    $mail->addAddress('help@cubedtronics.com');
    $mail->addAddress('4349647038@txt.att.net');
    $mail->addReplyTo($visitor_email);

    $mail->isHTML(true);
    $mail->Subject = $email_subject;
    $mail->Body    = $email_body;
    $mail->AltBody = $altemail_body;

    $mail->send();

    header('Location: https://cubedtronics.com/success');
      // if(isset($_REQUEST["destination"])){
      //   header("Location: {$_REQUEST["destination"]}");
      // }else if(isset($_SERVER["HTTP_REFERER"])){
      //   header("Location: {$_SERVER["HTTP_REFERER"]}");
      // }else{
      //   header('Location: ../index.php');
      // }


} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
