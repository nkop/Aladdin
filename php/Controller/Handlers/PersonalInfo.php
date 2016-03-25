<?php
function validateData($accountid, $firstname, $middlename, $lastname, $zipcode, $housenumber, $street, $city, $email){
	try {
		
		$safeAccountID = mysqli_real_escape_string($accountid);
		$safeFirstname = mysqli_real_escape_string($firstname);
		$safeMiddlename = mysqli_real_escape_string($middlename);
		$safeLastname = mysqli_real_escape_string($lastname);
		$safeZipcode = mysqli_real_escape_string($zipcode);
		$safeHousenumber = mysqli_real_escape_string($housenumber);
		$safeStreet = mysqli_real_escape_string($street);
		$safeCity = mysqli_real_escape_string($city);
		$safeEmail = mysqli_real_escape_string($email);
		
		
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		if ($safeAccountID> 0) {
			$sql_query = "UPDATE `account` SET `accountid` = '".$safeAccountID."', `voornaam` = '".$safeFirstname."', `achternaam` = '".$safeLastname."', `tussenvoegsel` = '".$safeMiddlename."', `postcode` = '".$safeZipcode."', `huisnummer` = '".$safeHousenumber."', `straatnaam` = '".$safeStreet."', `woonplaats` = '".$safeCity."', `email` = '".$safeEmail."' WHERE `accountid` = ".$safeAccountID.";";
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