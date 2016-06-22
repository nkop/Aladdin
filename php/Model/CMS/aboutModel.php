<?php

class aboutModel{
		function __construct() {
		   include_once '/../DB/Database.class.php';
   	}

function getAbouts() {
	//haalt alle regels op
	$db = Database::getInstance ();
	$sql = $db->getConnection ();

	$query = "SELECT * FROM `about`";
	return $sql->query ( $query );
}

function saveAbout($rule, $exists) {
	//updates an existing about or saves it as a new about
	//$about = a about object
	//$exists: true = already existing about, false = new about
	$db = Database::getInstance ();
	$sql = $db->getConnection ();

	$tekst = $sql->real_escape_string ( $rule->tekst );
	if ($exists) {
		$id = $sql->real_escape_string ( $rule->id );
		$query = "UPDATE `about` SET `id`='$id',`tekst`='$tekst' WHERE `id`='$id'";
		return $sql->query ( $query );
	} else {
		$query = "INSERT INTO `about` (tekst) VALUES ('$tekst')";
		return $sql->query($query);
	}
}
}

