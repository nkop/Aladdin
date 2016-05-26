<?php
class MatchesModel{
	function GatherData(){
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$query ="";
		$result = $sql->query($query);
	}
}