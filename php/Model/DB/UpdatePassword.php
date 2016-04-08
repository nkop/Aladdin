<?php
include 'Database.class.php';

function UpdatePassword($email, $password){

  $hashed = password_hash("$password", PASSWORD_DEFAULT);
  $db -> new Database();
  $db -> doSQL("UPDATE account SET wachtwoord=$hashed WHERE email=$email");
}


?>
