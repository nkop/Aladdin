<?php

class AccessHandler{
  function CheckAccess(){
      session_start();
      if(isset($_SESSION['rights'])){
      return true;
    }
  }
  function CheckLoginUser() {
  	if(isset($_SESSION['userName'])){
  		return true;
  	} 	
  }
}

?>
