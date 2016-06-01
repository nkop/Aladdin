<?php
/*
 * @author Niels Kop
 */
class homepageModel{
	function __construct(){
		include_once 'Model/DB/Database.class.php';
		include_once 'Model/CMS/sponsor.class.php';
		include_once 'Model/CMS/banner.class.php';
	}

	function getTexts() {
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		return $sql->query ( "SELECT * FROM tekstvak WHERE pagina_paginanaam = 'homepage'" );
	}
	
	function getSponsor(){
		//get all sponsoren
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		$sponsoren = array();
		$query = "SELECT * FROM sponsor order by cijfer DESC;";
		$result = $sql->query ( $query );
		while ( $row = $result->fetch_object ( 'sponsor' ) ) {
			array_push ( $sponsoren, $row );
		}
		return $sponsoren;
	}
	
	function GetBanners(){
		//get all banners
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		$banners = array();
		$query = "SELECT * FROM banner";
		$result = $sql->query ( $query );
		while ( $row = $result->fetch_object ( 'banner' ) ) {
			array_push ( $banners, $row );
		}
		return $banners;
	}
	
	
}
