<?php
include ("Database.class.php");

function UpdatePassword($email, $password){

  $hashed = password_hash("$password", PASSWORD_DEFAULT);
  $db = Database::getInstance();
  $sql = $db->getConnection();
  $query = "UPDATE account SET wachtwoord=$hashed WHERE email=$email";

  $result = mysqli_query($sql, $query);
}


?>
