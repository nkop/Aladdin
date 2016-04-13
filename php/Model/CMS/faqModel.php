<?php
include_once '/../DB/Database.class.php';

function getCategories() {
	//haalt alle faqcategorieen op
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$query = "SELECT * FROM `faqcategorie`";
	return $sql->query ( $query );
}
function getFaqs() {
	//haalt alle faqs op
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$query = "SELECT * FROM `faq`";
	return $sql->query ( $query );
}
function saveFaq($faq, $exists) {
	//update een bestaande faq of slaat een nieuwe op
	//$faq = een Faq object
	//$exists: true = reeds bestaande faq, false = nieuwe faq
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$vraag = $sql->real_escape_string ( $faq->vraag );
	$antwoord = $sql->real_escape_string ( $faq->antwoord );
	$categorie = $sql->real_escape_string ( $faq->categorie );
	if ($exists) {
		$id = $sql->real_escape_string ( $faq->id );
		$query = "UPDATE `faq` SET `id`='$id', `categorie`='$categorie',`vraag`='$vraag',`antwoord`='$antwoord' WHERE `id`='$id'";
		return $sql->query ( $query );
	}
	
	$query = "INSERT INTO `faq` (vraag, antwoord, categorie) VALUES ('$vraag', '$antwoord', '$categorie')";
	return $sql->query($query);	
}
function deleteFaq($faqid){
	//verwijderd een faq uit de database
	//$faqid = id van de te verwijderen faq
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$faqid = $sql->real_escape_string($faqid);
	
	$query = "DELETE FROM `faq` WHERE `id` = '$faqid'";
	return $sql->query($query);
}
function nieuweCategorie($header){
	//voegt een nieuwe categorie toe
	//$header = hoe de categorie moet heten
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$header = $sql->real_escape_string($header);
	
	$query = "INSERT INTO `faqcategorie` (header) VALUES ('$header')";
	return $sql->query($query);
}
function deleteCategorie($categorie_id){
	//verwijderd een categorie inclusief alle faqs daaraan verbonden
	//$categorie_id = de id van de te verwijderen faqcategorie
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$categorie_id = $sql->real_escape_string($categorie_id);
	
	$query1 = "DELETE FROM `faq` WHERE `categorie` = '$categorie_id'";
	if($sql->query($query1)){
		$query2 = "DELETE FROM `faqcategorie` WHERE `id` = '$categorie_id'";
		return $sql->query($query2);
	}
	return false;		
}