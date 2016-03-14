<?php

if (isset($_SESSION['email'])){
	if (strlen($_SESSION['email']) < 1){
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$newLink = str_replace(end((explode('/', $actual_link))), "page_login.php", $actual_link);
		header('Location: '.$newLink);
	}
}

?>