<?php
include ("Database.class.php");

function UpdatePassword($email, $password){
include_once '../password.php';

  $hashed = password_hash("$password", PASSWORD_DEFAULT);
  echo $email;
  echo $password;

  $db = Database::getInstance();
  $sql = $db->getConnection();
  $query = "UPDATE account SET wachtwoord = '$hashed' WHERE email = '$email'";

  if($result = mysqli_query($sql, $query)){

    echo "Updated";
    header('Location: ../../Controller/RecoveryController.php?status=success');
  }else{
    echo "Failed";
    header('Location: ../../Controller/RecoveryController.php?status=fail');
    echo $sql->error;
  }
}


?>