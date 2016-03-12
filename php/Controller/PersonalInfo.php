<?php
function validateData($accountid, $firstname, $middlename, $lastname, $zipcode, $housenumber, $street, $city, $email){
	try {
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		if ($accountid> 0) {
			$sql_query = "UPDATE `account` SET `accountid` = '".$accountid."', `voornaam` = '".$firstname."', `achternaam` = '".$lastname."', `tussenvoegsel` = '".$middlename."', `postcode` = '".$zipcode."', `huisnummer` = '".$housenumber."', `straatnaam` = '".$street."', `woonplaats` = '".$city."', `email` = '".$email."' WHERE `accountid` = ".$accountid.";";
		}
		$mysqli->query($sql_query);
		return true;
	} catch (Exception $e) {
		return false;
	}
	finally {
		$mysqli->close();
	}

}
?>