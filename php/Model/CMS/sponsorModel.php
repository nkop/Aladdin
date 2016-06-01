<?php
/*
 * @author Ferry Zijlmans
*/
class sponsorModel{
	function __construct(){
		include_once '/../DB/Database.class.php';
		include_once 'sponsor.class.php';
	}
	
	function GetAll(){
		//get all sponsoren
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		$sponsoren = array();
		$query = "SELECT * FROM sponsor order by cijfer asc;";
		$result = $sql->query ( $query );
		while ( $row = $result->fetch_object ( 'sponsor' ) ) {
			array_push ( $sponsoren, $row );
		}
		return $sponsoren;
	}
	
	function GetByID($sponsorID){
		//get sponsor by id
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		$query = "SELECT * FROM sponsor where sponsor_id = ".$sponsorID;
		$result = $sql->query ($query);
		$row = $result->fetch_object('sponsor');		
		$result->close();
		return $row;
	}
	
	function newSponsor(){
		return new sponsor();
	}
	
	//save sponsor
	function InsertSponsor($sponsor){
		//insert a new newsitem
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$naam = $sql->real_escape_string ( $sponsor->naam );
		$url = $sql->real_escape_string ( $sponsor->url );
		$afbeelding = $sql->real_escape_string ( $sponsor->afbeelding );
		$cijfer = $sponsor->cijfer;
		
		$query = "INSERT INTO `sponsor`
				(`naam`,
				`url`,
				`afbeelding`,
				`cijfer`)
				VALUES ('$naam', '$url', '$afbeelding', $cijfer)";
		$sql->query($query);
		return $query;
	}
	
	function EditSponsor($sponsor){
		//insert a new newsitem
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$id = $sponsor->sponsor_id;
		$naam = $sql->real_escape_string ( $sponsor->naam );
		$url = $sql->real_escape_string ( $sponsor->url );
		$afbeelding = $sql->real_escape_string ( $sponsor->afbeelding );
		$cijfer = $sponsor->cijfer;

		$query = "UPDATE `sponsor`
SET
`naam` = '$naam',
`url` = '$url',
`afbeelding` = '$afbeelding',
`cijfer` = $cijfer
WHERE `sponsor_id` = $id";
		$sql->query($query);
		return $query;
	}
	
		function DeleteSponsor($id){
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$Sponsorid = $sql->real_escape_string ( $id );

		$query = "DELETE FROM `sponsor`
					WHERE `sponsor_id` = $Sponsorid;";
		try {
			$sql->query($query);
			header('Location: admin.php?controller=editSponsorItems&action=Succes');
		} catch (Exception $e) {
			header('Location: admin.php?controller=editSponsorItems&action=Error');
		} 
	}
	
}

?>