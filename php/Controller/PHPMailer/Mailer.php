<?php
require 'PHPMailerAutoload.php';

function SendMail($recipient, $message, $subject){

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
  $mail->Subject = $subject;
  $mail->Body = $message;
  $mail->AddAddress($recipient);

  if(!$mail->Send()) {
     echo "Mailer Error: " . $mail->ErrorInfo;
  }

}

function SendContactMail($message, $subject ){
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
  $mail->Subject = $subject;
  $mail->Body = $message;
  $mail->AddAddress("aladdingroepdcontact@gmail.com");

  if(!$mail->Send()) {
    return false;
  } else {
    return true;
  }
}

?>
