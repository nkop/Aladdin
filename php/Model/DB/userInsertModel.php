<?php
include '../../Controller/PHPMailer/Mailer.php';
class Userinsert{

function insert_user($sql, $gebruikersnaam, $voornaam, $achternaam, $tussenvoegsel, $date, $email, $straatnaam, $huisnummer, $postcode, $woonplaats, $geslacht, $rechten, $wachtwoord){

	#check if e-mail exists in database, if yes: abort and show error message.
	$result = mysqli_query($sql, "SELECT 1 FROM account WHERE email = '$email'");
	if ($result && mysqli_num_rows($result) > 0)
	{
		return false;
	}
	else
	{
		#generate query and execute it, handle results
		$query = "INSERT INTO account (gebruikersnaam, voornaam, achternaam, tussenvoegsel, geboortedatum, email, straatnaam, huisnummer, postcode, woonplaats, geslacht, rechten, wachtwoord) VALUES ('$gebruikersnaam', '$voornaam', '$achternaam', '$tussenvoegsel' , '$date', '$email' , '$straatnaam', '$huisnummer', '$postcode', '$woonplaats', '$geslacht', '$rechten', '$wachtwoord')";
		if (mysqli_query($sql, $query)) {
			$message = "Beste $voornaam, <br /><br /> U heeft een nieuw account bij Aladdin geregistreerd met de volgende gegevens:<br /><br /><b>Voornaam:</b> $voornaam<br /><b>Tussenvoegsel:</b> $tussenvoegsel<br /><b>Achternaam:</b> $achternaam<br /><b>Geboortedatum:</b> $date<br /><b>E-mail:</b> $email<br /><b>Adres:</b> $straatnaam $huisnummer<br /><b>Postcode en woonplaats:</b> $postcode $woonplaats<br /><br />Als u dit account niet zelf heeft geregistreerd adivseren wij u om contact op te nemen met ons via onze contact pagina op http://bit.ly/AladdinD<br /><br />Met vriendelijke groeten,<br /><br />Het Aladdin team";
			$subject = "Aladdin registratie";
			SendMail($email, $message, $subject);
			return true;
		} else {
			echo mysqli_error($sql);
			return false;
		}
	}
	}
}
?>
