<?php
/*
 * @author:Niels Kop
 */
include_once '/../DB/Database.class.php';
class EditPagesModel {
	function getTekstvakken($pagina) {
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$query = "SELECT * FROM `tekstvak` WHERE pagina_paginanaam = '$pagina'";
		return $sql->query ( $query );
	}
	function saveTekstvak($tekstvak) {
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$tekstvak->tekstvakid = $sql->real_escape_string ( $tekstvak->tekstvakid );
		$tekstvak->header = $sql->real_escape_string ( $tekstvak->header );
		$tekstvak->tekstvaktekst = $sql->real_escape_string ( $tekstvak->tekstvaktekst );
		$tekstvak->pagina_paginanaam = $sql->real_escape_string ( $tekstvak->pagina_paginanaam );
		
		$query = "UPDATE `tekstvak` SET `tekstvakid`='$tekstvak->tekstvakid',`header`='$tekstvak->header',`tekstvaktekst`='$tekstvak->tekstvaktekst',`pagina_paginanaam`='$tekstvak->pagina_paginanaam' WHERE tekstvakid = '$tekstvak->tekstvakid'";
		return $sql->query ( $query );
	}
}