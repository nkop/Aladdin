<?php
/*
 * @author Niels Kop
 */
include_once 'Model/DB/Database.class.php';
function getTexts() {
	$db = Database::getInstance ();
	$sql = $db->getConnection ();
	
	return $sql->query ( "SELECT * FROM tekstvak WHERE pagina_paginanaam = 'homepage'" );
}
