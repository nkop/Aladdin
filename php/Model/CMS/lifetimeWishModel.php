<?php
class LifetimeWishModel {
	function gatherData() {
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$query = "CREATE OR REPLACE VIEW getDoorlooptijd
AS Select 	w.plaatser AS 'Plaatser',
        	w.tekst as 'Wens',
        	CASE
            	WHEN w.verval_datum IS NULL THEN datediff(SYSDATE(), w.creatie_datum)
            	ELSE 0
        	END as doorlooptijd
from WENS as w
order by datediff(SYSDATE(), w.creatie_datum) desc;
	";
		
		if($sql->query($query)){
			$query = "SELECT wens, doorlooptijd FROM getDoorlooptijd";
			$result = $sql->query($query);
			var_dump($result);
		}
	}
}