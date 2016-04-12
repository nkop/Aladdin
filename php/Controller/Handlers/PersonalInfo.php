<?php
function validateData($accountid, $firstname, $middlename, $lastname, $zipcode, $housenumber, $street, $city, $email){
	try {
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		
		$safeAccountID = mysqli_real_escape_string($mysqli, $accountid);
		$safeFirstname = mysqli_real_escape_string($mysqli, $firstname);
		$safeMiddlename = mysqli_real_escape_string($mysqli, $middlename);
		$safeLastname = mysqli_real_escape_string($mysqli, $lastname);
		$safeZipcode = mysqli_real_escape_string($mysqli, $zipcode);
		$safeHousenumber = mysqli_real_escape_string($mysqli, $housenumber);
		$safeStreet = mysqli_real_escape_string($mysqli, $street);
		$safeCity = mysqli_real_escape_string($mysqli, $city);
		$safeEmail = mysqli_real_escape_string($mysqli, $email);
				
		if ($safeAccountID> 0) {
			$sql_query = "UPDATE `account` SET `accountid` = '".$safeAccountID."', `voornaam` = '".$safeFirstname."', `achternaam` = '".$safeLastname."', `tussenvoegsel` = '".$safeMiddlename."', `postcode` = '".$safeZipcode."', `huisnummer` = '".$safeHousenumber."', `straatnaam` = '".$safeStreet."', `woonplaats` = '".$safeCity."', `email` = '".$safeEmail."' WHERE `accountid` = ".$safeAccountID.";";
		}
		$mysqli->query($sql_query);
		return true;
	} catch (Exception $e) {
		$stored_exc = $e;
		return false;
	}
	if($stored_exc) {
		$mysqli->close();
	}

}
?>