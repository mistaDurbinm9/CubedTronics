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
$device = $_POST['device'];

$email_from = "tdavis@cubedtronics.com";

$email_subject = "Repair Request";

$email_body = "First Name: $firstname<br>Last Name: $lastname<br>".
"Email: $visitor_email<br>".
"Device: $device<br>".
"Message: <br>$message<br>";

$altemail_body = "\n First Name: $firstname \nLast Name: $lastname\n".
"Email: $visitor_email\n".
"Device: $device\n".
"Message: \n$message\n";

$repair_type  = 'void';
if(isset($_POST['repair_type']) && is_array($_POST['repair_type']) && count($_POST['repair_type']) > 0){
  $repair_type = implode(', ', $_POST['repair_type']);
}

if(!$repair_type = "void"){
  $email_body .= "Repair Types: " . $repair_type;
}else{
  $email_body .= "";
}



try {

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'ssl://mail.cubedtronics.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'tdavis@cubedtronics.com';
    $mail->Password   = 'uR?55~XezZ$;';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 465;

    $mail->setFrom($email_from);
    $mail->addAddress('tylerssbusiness@gmail.com');
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
