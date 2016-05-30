<?php
//Call self
$controller = new PasswordChangeHandler();

class PasswordChangeHandler{

private $email = "";
private $currentPassword = "";
private $newPassword = "";
private $newPasswordConfirm = "";
private $updatePasswordModel = "";
//Call needed functions to change password, If success call subpassword
  public function __construct(){
  	include '../../Model/DB/updatePasswordModel.php';
    $this->updatePasswordModel = new UpdatePasswordModel();

    $this->email = $_POST["mail"];
    $this->currentPassword = $_POST["currentPassword"];
    $this->newPassword = $_POST["newPassword"];
    $this->newPasswordConfirm = $_POST["newPasswordConfirm"];

    if($this->CheckPassword()){
      $this->SubPassword($this->email, $this->newPasswordConfirm);
    }
  }

//Check if passwords are equal, check if current password is equal
  function CheckPassword(){
    if($this->newPassword !== $this->newPasswordConfirm){
      echo "niet gelijk";
      header('location: ../../index.php?controller=personalInfo&action=Index&status=password');
      return false;
    }
    if(!$this->updatePasswordModel->CheckPassword($this->email, $this->currentPassword)){
      header('location: ../../index.php?controller=personalInfo&action=Index&status=password');
      return false;
    }
    return true;
  }
//Substitute password
  function SubPassword(){
    if($this->updatePasswordModel->UpdatePassword($this->email, $this->newPasswordConfirm)){
      header('Location: ../../index.php?controller=personalInfo&action=Index&status=success');
    }else{
      header('location: ../../index.php?controller=personalInfo&action=Index&status=password');
    }
  }

}

?>
