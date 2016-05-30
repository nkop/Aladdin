<?php

class AccessHandler{
  function CheckAccess(){
      session_start();
      if(isset($_SESSION['rights'])){
      return true;
    }
  }
}

?>
