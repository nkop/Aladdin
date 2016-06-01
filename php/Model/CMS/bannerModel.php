<?php
/*
 * @author Ferry Zijlmans
*/
class bannerModel{
	function __construct(){
		include_once '/../DB/Database.class.php';
		include_once 'banner.class.php';
	}

	function GetAll(){
		//get all sponsoren
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

	function GetByID($bannerID){
		//get sponsor by id
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		$query = "SELECT * FROM banner where banner_id = ".$bannerID;
		$result = $sql->query ($query);
		$row = $result->fetch_object('banner');
		$result->close();
		return $row;
	}

	function NewBanner(){
		return new banner();
	}

	//save sponsor
	function InsertBanner($banner){
		//insert a new newsitem
		$db = Database::getInstance ();
		$sql = $db->getConnection ();

		$afbeelding_groot = $sql->real_escape_string ( $banner->afbeelding_groot );
		$tekst = $sql->real_escape_string ( $banner->tekst );
		$afbeelding_klein = $sql->real_escape_string ( $banner->afbeelding_klein );

		$query = "INSERT INTO `banner`
		(`afbeelding_groot`,
		`tekst`,
		`afbeelding_klein`)
		VALUES ('$afbeelding_groot', '$tekst', '$afbeelding_klein')";
		try {
			$sql->query($query);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	function EditBanner($banner){
		//insert a new newsitem
		$db = Database::getInstance ();
		$sql = $db->getConnection ();

		$id = $banner->banner_id;
		$afbeelding_groot = $sql->real_escape_string ( $banner->afbeelding_groot );
		$tekst = $sql->real_escape_string ( $banner->tekst );
		$afbeelding_klein = $sql->real_escape_string ( $banner->afbeelding_klein );

		$query = "UPDATE `banner`
		SET
		`afbeelding_groot` = '$afbeelding_groot',
		`tekst` = '$tekst',
		`afbeelding_klein` = '$afbeelding_klein'
		WHERE `banner_id` = $id";
		try {
			$sql->query($query);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	function DeleteBanner($id){
		$db = Database::getInstance ();
		$sql = $db->getConnection ();

		$bannerid = $sql->real_escape_string ( $id );

		$query = "DELETE FROM `banner`
		WHERE `banner_id` = $bannerid;";
		try {
			$sql->query($query);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

}

?>