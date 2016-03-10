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
	
	function selectquery($query)
	{
		
	}
	
}

?>