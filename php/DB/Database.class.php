<?php

class Database
{
	private $_connection;
	private static $_instance;
	
	/*
	 * the code to execute a query should look like this:
	 *  $db = Database::getInstance();
	 *	$mysqli = $db->getConnection();
	 *	$sql_query = "SELECT foo FROM .....";
	 *	$result = $mysqli->query($sql_query);
	 * */
	
	function __construct()
	{
		include 'config.inc.php';
		$this->_connection = new mysqli($dblocatie, $dbloginnaam, $dbwachtwoord, $dbscheme);
		
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: ".mysqli_connect_error(),
					E_USER_ERROR);
		}
		
		//include_once 'createscript.inc.php';
		//doSql($sql);
	
	}	

	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }
	// Get mysqli connection
	public function getConnection() {
		return $this->_connection;
	}
	
	function doSQL($query)
	{
		return mysqli_query($query);
	}
	
	function insert_user(){
	
		$db = $this::getInstance();
		$sql = $db->getConnection();
// 		$date = date("Y-m-d");
// 		$date = date("Y-m-d",strtotime($date));
		
		#DATE FORM VARIABLES HERE
		$jaar = $_POST["jaar"];
		$maand = $_POST["maand"];
		$dag = $_POST["dag"];
		$dateFormat = date_create("".$jaar."-".$maand."-".$dag);
		$date = date_format($dateFormat, "Y-m-d");
		
		echo $date."<br>";
		
		
		#REGULAR ACCOUNT FORM VARIABLES HERE
		$voornaam = $_POST["voornaam"];
		$achternaam = $_POST["achternaam"];
		$tussenvoegsel = $_POST["tussenvoegsel"];
		$email = $_POST["email"];
		$straatnaam = $_POST["straatnaam"];
		$huisnummer = $_POST["huisnummer"];
		$postcode = $_POST["postcode"];
		$woonplaats = $_POST["woonplaats"];
		$geslacht = $_POST["geslacht"];
		$rechten = 2;
		$wachtwoord = $_POST["wachtwoord"];
		
		echo $voornaam."<br>";
		echo $achternaam."<br>";
		echo $tussenvoegsel."<br>";
		echo $email."<br>";
		echo $straatnaam."<br>";
		echo $huisnummer."<br>";
		echo $postcode."<br>";
		echo $woonplaats."<br>";
		echo $geslacht."<br>";
		echo $rechten."<br>";
		echo $wachtwoord."<br>";
			
// 		$query = "INSERT INTO testing (id, naam, achternaam, nummer) VALUES ('1', 'mick', 'dep', '0634903897')";
 		$query = "INSERT INTO account (gebruikersnaam, voornaam, achternaam, tussenvoegsel, geboortedatum, email, straatnaam, huisnummer, postcode, woonplaats, geslacht, rechten, wachtwoord) VALUES ('test', '$voornaam', '$achternaam', '$tussenvoegsel' , '$date', '$email' , '$straatnaam', '$huisnummer', '$postcode', '$woonplaats', 'm', '$rechten', '$wachtwoord')";                                                                                            
		if (mysqli_query($sql, $query)) {
			echo "New record created successfully";
		} else {
			echo "Error";
		}
	} 
}
if (isset($_POST)) {
	$firstObj= new Database();
	$myvar = $firstObj->insert_user();
}
?>