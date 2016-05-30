<?php

class RecoveryController{

  private $RecoverError = false;
  private $RecoverSuccess = false;

//Set any eventual messages
  function SetMessage(){
    if(isset($_GET['status'])){
    $status = strtolower(htmlspecialchars($_GET['status']));
    switch ($status) {
        case "fail":
            $this->RecoverError = true;
            break;
        case "success":
            $this->RecoverSuccess = true;
            break;
          }
        }
  }
//Show recovery page with eventual messages
  function Index(){
    global $smarty;
    $this->SetMessage();
    $smarty->assign('RecoverError', $this->RecoverError);
    $smarty->assign('RecoverSuccess', $this->RecoverSuccess);
    $smarty->display('passwordRecovery.tpl');
  }

}





?>
