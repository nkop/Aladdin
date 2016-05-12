<?php
if ($_SESSION['email'] == null){
	header("location: index.php?controller=login&action=index");
}
?>