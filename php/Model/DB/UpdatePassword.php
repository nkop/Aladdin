<?php
include ("Database.class.php");

function UpdatePassword($email, $password){
  #include password.php for password_hash to work
  include_once '../password.php';

  #hash password to insert into database
  $hashed = password_hash("$password", PASSWORD_DEFAULT);

  #get database connection to work with
  $db = Database::getInstance();
  $sql = $db->getConnection();

  #create query to execute and update the password in the datbase
  $email = mysqli_real_escape_string($sql, $email);
  $query = "UPDATE account SET wachtwoord = '$hashed' WHERE email = '$email'";

  #check if user exists in database
  if (CheckUser($email))
  {
    #execute query, and handle any errors
    if(mysqli_query($sql, $query)){
      header('Location: ../../Controller/RecoveryController.php?status=success');
    }else{
      header('Location: ../../Controller/RecoveryController.php?status=fail');
      echo $sql->error;
    }
  }else{
    header('Location: ../../Controller/RecoveryController.php?status=fail');
    echo $sql->error;
  }
}

#check if user exists in database
function CheckUser($email){
  $db = Database::getInstance();
  $sql = $db->getConnection();

  $result = mysqli_query($sql, "SELECT 1 FROM account WHERE email = '$email'");
  if ($result && mysqli_num_rows($result) > 0)
  {
    return true;
  }

}


?>
