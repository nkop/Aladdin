<?php
include '../PHPMailer/Mailer.php';

//Call self
$controller = new ContactController();

class ContactController{

//Variables needed
  private $naam = "";
  private $email = "";
  private $message = "";
  private $captcha = "";

//Constructor that sends mail
  public function __construct(){
    $naam = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $captcha = $_POST["human"];
    $body = "<b>E-mail contact: $email</b><br /><br /><b>Bericht: </b>$message";
    $subject = "Contact: ".$email;
    if(SendContactMail($body, $subject)){
      header('location: ../../index.php?controller=contact&action=Index&status=success');
    }else{
      header('location: ../../index.php?controller=contact&action=Index&status=fail');
    }

  }

}

?>
