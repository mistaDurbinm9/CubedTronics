<?php

ini_set( display_errors, 1 );

error_reporting( E_ALL );

$_SESSION['previous'] = 'http://'. $_SERVER[HTTP_HOST]. $_SERVER[REQUEST_URI];

$name = $_POST['name'];
$visitor_email = $_POST['uid-email'];
$message = $_POST['message'];
$address = $_POST['autocomplete_search'];

$email_from = "tyler@cubedpotato.com";

$email_subject = "Repair Request";

$email_body = "\n Name: $name\n".
"Email: $visitor_email\n".
"Address: $address\n".
"Message: $message\n";

$to = "tylerssbusiness@gmail.com, 4349647038@vtext.com";

//$headers = "From: $email_from \r\n";
//$headers .= "Reply-To: $visitor_email \r\n";
$$headers = array(
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/html; charset=iso-8859-1',
         //see https://www.w3schools.com/charsets/ref_html_8859.asp
    'From' => $email_from,
    'Reply-To' => $visitor_email,
    'X-Mailer' => 'PHP/' . phpversion()
);

$repair_type  = 'None';
if(isset($_POST['repair_type']) && is_array($_POST['repair_type']) && count($_POST['repair_type']) > 0){
  $repair_type = implode(', ', $_POST['repair_type']);
}

$email_body .= "Repair Types: " . $repair_type;

//$test = mail($to,$email_subject,$email_body,$headers); // debugging
//echo var_dump($test); // debugging

if (mail($to,$email_subject,$email_body,$headers) == true) {
  if(isset($_REQUEST["destination"])){
    header("Location: {$_REQUEST["destination"]}");
  }else if(isset($_SERVER["HTTP_REFERER"])){
    header("Location: {$_SERVER["HTTP_REFERER"]}");
  }else{
    header('Location: ../index.php');
  }
} else {
  echo "Error with sending Form!";
}
?>
