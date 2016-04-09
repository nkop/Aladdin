<?php
include ("Database.class.php");
include ("../password.php");

function UpdatePassword($email, $password){


  $hashed = password_hash("$password", PASSWORD_DEFAULT);
  echo $email;
  echo $password;

  $db = Database::getInstance();
  $sql = $db->getConnection();
  $query = "UPDATE account SET wachtwoord = '$hashed' WHERE email = '$email'";

  if($result = mysqli_query($sql, $query)){

    echo "Updated";
    header('Location: ../../View/RecoverSucces.php');
  }else{
    echo "Failed";
    header('Location: ../../View/RecoverFail.php');
    echo $sql->error;
  }
}


?>
