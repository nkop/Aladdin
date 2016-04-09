<?php
include_once '../../Model/DB/UpdatePassword.php';

require '../PHPMailer/PHPMailerAutoload.php';

$password = randomPassword();

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
// $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "aladdingroepd@gmail.com";
$mail->Password = "AladdinD";
$mail->SetFrom("AladdinD@gmail.com");
$mail->Subject = "Aladdin wachtwoord herstellen";
$mail->Body = "Beste gebruiker,<br/><br /> Uw nieuwe wachtwoord om in te loggen is: <b>".$password."</b><br /><br /> Met vriendelijke groeten,<br /><br />Het Aladdin team";
$mail->AddAddress($_POST["mail"]);

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }

##$password = randomPassword();
##$to      = $_POST['email'];
##$subject = "Aladdin wachtwoord";
##$message = "Beste gebruiker, \r\n Uw nieuwe wachtwoord om mee in te loggen is: ".$password;
##$from = "From: webmaster@example.com";
##mail("$to", "$subject", "$message", "$from");

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}


function subPassword(){

  UpdatePassword($_POST["email"], $password);

}
 ?>
