<?php
include ("Database.class.php");

class updatePasswordModel{

function UpdatePassword($email, $password){
  #include password.php for password_hash to work
  include_once '../password.php';


  #hash password to insert into database

  #get database connection to work with
  $db = Database::getInstance();
  $sql = $db->getConnection();

  $password = mysqli_real_escape_string($sql, $password);
  $hashed = password_hash("$password", PASSWORD_DEFAULT);
  #create query to execute and update the password in the datbase
  $email = mysqli_real_escape_string($sql, $email);
  $query = "UPDATE account SET wachtwoord = '$hashed' WHERE email = '$email'";

  #check if user exists in database
  if ($this->CheckUser($email))
  {
    #execute query, and handle any errors
    if(mysqli_query($sql, $query)){
      return true;
    }else{
      return false;
      echo $sql->error;
    }
  }else{
    return false;
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

function CheckPassword($email, $password){
  $db = Database::getInstance();

  $sql = $db->getConnection();
  $hashed = password_hash("$password", PASSWORD_DEFAULT);
  $result = mysqli_query($sql, "SELECT wachtwoord FROM account WHERE email = '$email' ");

  if (password_verify($password, mysqli_fetch_object($result)->wachtwoord))
  {
    return true;
  }
}

}


?>
