<?php

class RegisterController{

private $RegistrationFail = false;
private $RegistrationSuccess = false;
private $PasswordError = false;

//Set any messages that are retrieved from GET
  function SetError(){
    if(isset($_GET['status'])){
    $status = strtolower(htmlspecialchars($_GET['status']));
    switch ($status) {
        case "fail":
            $this->RegistrationFail = true;
            break;
        case "success":
            $this->RegistrationSuccess = true;
            break;
        case "password":
            $this->PasswordError = true;
            break;
          }
      }
  }

//Show registration page with eventual messages.
  function Index(){
		global $smarty;
    $this->SetError();
    $smarty->assign('RegistrationFail', $this->RegistrationFail);
    $smarty->assign('RegistrationSuccess', $this->RegistrationSuccess);
    $smarty->assign('PasswordError', $this->PasswordError);
    $smarty->display('registration.tpl');
  }

}

?>
