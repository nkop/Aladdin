<?php

include '../../../Model/CMS/AdminLoginModel.php';

class CmsLoginHandler{
   private $username;
   private $password;
   
  public function __construct(){
      $adminModel = new AdminLoginModel();
      if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($adminModel->Login($username, $password)){
            header('Location: ../../../admin.php?controller=dashboard&action=Index');
        }else{
            header('Location: ../../../admin.php?controller=cmsLogin&action=Index&status=fail');
        }
        
      }
  }
}


$Controller = new CmsLoginHandler();
?>