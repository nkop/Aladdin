<?php 
include_once '/../DB/Database.class.php';

Class FaqModel{

function getCategories() {
	//gets all the faq categories
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$query = "SELECT * FROM `faqcategorie`";
	return $sql->query ( $query );
}
function getFaqs() {
	//gets all the faqs
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$query = "SELECT * FROM `faq`";
	return $sql->query ( $query );
}
function saveFaq($faq, $exists) {
	//updates an existing faq or saves it as a new faq
	//$faq = a Faq object
	//$exists: true = already existing faq, false = new faq
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$vraag = $sql->real_escape_string ( $faq->vraag );
	$antwoord = $sql->real_escape_string ( $faq->antwoord );
	$categorie = $sql->real_escape_string ( $faq->header );
	if ($exists) {
		$id = $sql->real_escape_string ( $faq->id );
		$query = "UPDATE `faq` SET `id`='$id', `categorie_id`='$categorie',`vraag`='$vraag',`antwoord`='$antwoord' WHERE `id`='$id'";
		return $sql->query ( $query );
	} else {	
	$query = "INSERT INTO `faq` (vraag, antwoord, categorie_id) VALUES ('$vraag', '$antwoord', '$categorie')";
	return $sql->query($query);	
	}
}
function deleteFaq($faqid){
	//deletes a faq in the database
	//$faqid = id of the to be deleted faq
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$faqid = $sql->real_escape_string($faqid);
	
	$query = "DELETE FROM `faq` WHERE `id` = '$faqid'";
	return $sql->query($query);
}
function insertCategorie($faq){
	//adds a new faqcategory
	//$header = the name of the new category
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$header = $sql->real_escape_string($faq->header);
	$icon = $sql->real_escape_string($faq->icon);
	
	$query = "INSERT INTO `faqcategorie` (header, icon) VALUES ('$header', '$icon')";
	return $sql->query($query);
}
function deleteCategorie($categorie_id){
	//deletes a faqcategory include all its content
	//$categorie_id = id of the to be deleted faq
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$categorie_id = $sql->real_escape_string($categorie_id);
	$query1 = "DELETE FROM `faq` WHERE `categorie_id` = '$categorie_id'";
	if($sql->query($query1)){
		$query2 = "DELETE FROM `faqcategorie` WHERE `id` = '$categorie_id'";
		return $sql->query($query2);
	}
	return false;		
}
}