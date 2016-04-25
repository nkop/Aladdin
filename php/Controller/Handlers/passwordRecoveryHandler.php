<?php
include '../../Model/password.php';
include '../PHPMailer/Mailer.php';
require '../../Model/DB/updatePasswordModel.php';

$controller = new PasswordRecoveryHandler();

class PasswordRecoveryHandler{
private $updatePasswordModel = "";
#get email from post
private $email = "";

public function __construct(){
  #check if email exists
  $this->email = $_POST["mail"];
  $this->updatePasswordModel = new UpdatePasswordModel();
  if($this->Check($this->email)){

    #create new password, immediately call substitute method.
    $password = $this->randomPassword();
    $this->subPassword($this->email, $password);

    #construct mail body, recipient, subject
    $subject = "Aladdin wachtwoord herstellen";
    $message = "Beste gebruiker,<br/><br /> Uw nieuwe wachtwoord om in te loggen is: <b>".$password."</b><br /><br /> Met vriendelijke groeten,<br /><br />Het Aladdin team";
    $recipient = ($_POST["mail"]);

    #Call SendMail (coming from /PHPMailer/Mailer.php)
    SendMail($recipient, $message, $subject);

   }else{
     #redirect to error page
     header('Location: ../../index.php?controller=recovery&action=Index&status=fail');
   }
}


  #generate new random password for user
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

#substitute password in database
function subPassword($email, $pass){
  if($this->updatePasswordModel->UpdatePassword($email, $pass)){
    header('Location: ../../index.php?controller=recovery&action=Index&status=success');
  }else{
    header('Location: ../../index.php?controller=recovery&action=Index&status=fail');
  }

}

#check if email exists in database
function Check($email){
  if($this->updatePasswordModel->CheckUser($email)){
    return true;
  }
}
}
 ?>
