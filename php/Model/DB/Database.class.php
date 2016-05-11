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
		mysqli_query( $sql );
		return $result;
	}
	
	function getEmailByWensId($wensid){
		$query = "SELECT plaatser FROM wens WHERE wensenid= '$wensid' ";
		
		$result2 = mysqli_query($this->_connection, $query);
		$userid = mysqli_fetch_object($result2)->plaatser;
		
		$query2 = "SELECT email FROM account WHERE accountid = '$userid' ";
		$result = mysqli_query($this->_connection, $query2);
		
		return mysqli_fetch_object($result)->email;
	}
	
	function getNameByWensId($wensid){
		$query = "SELECT plaatser FROM wens WHERE wensenid= '$wensid' ";
		
		$result2 = mysqli_query($this->_connection, $query);
		
		$userid = mysqli_fetch_object($result2)->plaatser;
		
		$query2 = "SELECT voornaam FROM account WHERE accountid = '$userid' ";
		$result = mysqli_query($this->_connection, $query2);
		
		return mysqli_fetch_object($result)->voornaam;
	}
	
	function getWensTekstById($wensid){
		$query = "SELECT tekst FROM wens WHERE wensenid= '$wensid' ";
		
		$result = mysqli_query($this->_connection, $query);
		return mysqli_fetch_object($result)->tekst;
	}
	
}

?>
