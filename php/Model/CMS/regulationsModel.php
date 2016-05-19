<?php
include_once '/../DB/Database.class.php';

function getRuleCategories() {
	//haalt alle regelcategorieen op
	$db = Database::getInstance ();
	$sql = $db->getConnection ();

	$query = "SELECT * FROM `regelcategorie`";
	return $sql->query ( $query );
}

function getRules() {
	//haalt alle regels op
	$db = Database::getInstance ();
	$sql = $db->getConnection ();

	$query = "SELECT * FROM `regel`";
	return $sql->query ( $query );
}

function saveRule($rule, $exists) {
	//updates an existing rule or saves it as a new rule
	//$rule = a Rule object
	//$exists: true = already existing rule, false = new rule
	$db = Database::getInstance ();
	$sql = $db->getConnection ();

	$tekst = $sql->real_escape_string ( $rule->tekst );
	$categorie = $sql->real_escape_string ( $rule->categorie_id );
	if ($exists) {
		$id = $sql->real_escape_string ( $rule->id );
		$query = "UPDATE `regel` SET `id`='$id', `categorie_id`='$categorie',`tekst`='$tekst' WHERE `id`='$id'";
		return $sql->query ( $query );
	} else {
		$query = "INSERT INTO `regel` (tekst, categorie_id) VALUES ('$tekst', '$categorie')";
		return $sql->query($query);
	}
}
function deleteRule($ruleid){
	//deletes a rule in the database
	//$ruleid = id of the to be deleted rule
	$db = Database::getInstance ();
	$sql = $db->getConnection ();

	$ruleid = $sql->real_escape_string($ruleid);

	$query = "DELETE FROM `regel` WHERE `id` = '$ruleid'";
	return $sql->query($query);
}
function insertRuleCategorie($rule){
	//adds a new rulecategory
	//$header = the name of the new rule
	$db = Database::getInstance ();
	$sql = $db->getConnection ();

	$naam = $sql->real_escape_string($rule->naam);

	$query = "INSERT INTO `regelcategorie` (naam) VALUES ('$naam')";
	return $sql->query($query);
}
function deleteRuleCategorie($categorie_id){
	//deletes a rulecategory include all its content
	//$categorie_id = id of the to be deleted rule
	$db = Database::getInstance ();
	$sql = $db->getConnection ();

	$categorie_id = $sql->real_escape_string($categorie_id);
	$query1 = "DELETE FROM `regel` WHERE `categorie_id` = '$categorie_id'";
	if($sql->query($query1)){
		$query2 = "DELETE FROM `regelcategorie` WHERE `id` = '$categorie_id'";
		return $sql->query($query2);
	}
	return false;
}
