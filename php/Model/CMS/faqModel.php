<?php
include_once '/../DB/Database.class.php';
function getCategories() {
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$query = "SELECT * FROM `faqcategorie`";
	return $sql->query ( $query );
}
function getFaqs() {
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$query = "SELECT * FROM `faq`";
	return $sql->query ( $query );
}
function saveFaq($faq, $exists) {
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
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	$faqid = $sql->real_escape_string($faqid);
	
	$query = "DELETE FROM `faq` WHERE `id` = '$faqid'";
	return $sql->query($query);
}