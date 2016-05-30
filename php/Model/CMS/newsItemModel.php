<?php
/*
 * @author Ferry Zijlmans
 */


class NewsItemModel{
	
	function __construct(){
		include_once '/../DB/Database.class.php';
		include_once 'newsItem.class.php';
	}
	
	function GetAll(){
		//get all nieuwsitems
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		$newsItems = array();
		$query = "select n.nieuwsitemid,n.titel,n.tekst,n.thumbnail,n.isvideo,n.bannerfoto,n.datum,n.auteur, CONCAT(a.voornaam , ' ' , a.tussenvoegsel , ' ' , a.achternaam) as volledignaam from nieuwsitems n
				  left join account a on n.auteur = a.accountid";
		$result = $sql->query ( $query );
		while ( $row = $result->fetch_object ( 'nieuwsItem' ) ) {
			array_push ( $newsItems, $row );
		}
		return $newsItems;
	}
	
	function getTop5News(){
		//get all nieuwsitems
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		$newsItems = array();
		$query = "select n.nieuwsitemid,n.titel,n.tekst,n.thumbnail,n.isvideo,n.bannerfoto,n.datum,n.auteur, CONCAT(a.voornaam , ' ' , a.tussenvoegsel , ' ' , a.achternaam) as volledignaam from nieuwsitems n
				  left join account a on n.auteur = a.accountid order by datum ASC limit 5;";
		$result = $sql->query ( $query );
		while ( $row = $result->fetch_object ( 'nieuwsItem' ) ) {
			array_push ( $newsItems, $row );
		}
		return $newsItems;
	}
	
	function GetByID($id){
		//get newsitem from id
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		$query = "select n.nieuwsitemid,n.titel,n.tekst,n.thumbnail,n.isvideo,n.bannerfoto,n.datum,n.auteur, CONCAT(a.voornaam , ' ' , a.tussenvoegsel , ' ' , a.achternaam) as volledignaam from nieuwsitems n
				  left join account a on n.auteur = a.accountid where n.nieuwsitemid =".$id;
		$result = $sql->query ($query);
		$row = $result->fetch_object('nieuwsItem');		
		$result->close();
		return $row;
	}
	
	//retrieve a empty model
	function newNews(){
		return new nieuwsItem();
	}
	
	function InsertNewItem($newsitem){
		//insert a new newsitem
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$titel = $sql->real_escape_string ( $newsitem->titel );
		$tekst = $sql->real_escape_string ( $newsitem->tekst );
		$thumbnail = $sql->real_escape_string ( $newsitem->thumbnail );
		$isvideo = $newsitem->isvideo;
		$bannerfoto = $sql->real_escape_string ( $newsitem->bannerfoto );
		$datum = $sql->real_escape_string ( $newsitem->datum );
		$auteur = $newsitem->auteur;

		$query = "INSERT INTO `nieuwsitems`
				(`titel`,
				`tekst`,
				`thumbnail`,
				`isvideo`,
				`bannerfoto`,
				`datum`,
				`auteur`)
				VALUES ('$titel', '$tekst', '$thumbnail', $isvideo,'$bannerfoto', NOW(), '$auteur')";
		$sql->query($query);
		return $query;
	}
	
	function editNewItem($newsitem){
		//insert a new newsitem
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$nieuwsitemid = $sql->real_escape_string ( $newsitem->nieuwsitemid );
		$titel = $sql->real_escape_string ( $newsitem->titel );
		$tekst = $sql->real_escape_string ( $newsitem->tekst );
		$thumbnail = $sql->real_escape_string ( $newsitem->thumbnail );
		$isvideo = $newsitem->isvideo;
		$bannerfoto = $sql->real_escape_string ( $newsitem->bannerfoto );
		$datum = $newsitem->datum;
		$auteur = $newsitem->auteur;

		$query = "UPDATE `nieuwsitems`
					SET
					`titel` = '$titel',
					`tekst` = '$tekst',
					`thumbnail` = '$thumbnail',
					`isvideo` = $isvideo,
					`bannerfoto` = '$bannerfoto',
					`datum` = NOW(),
					`auteur` = $auteur
					WHERE `nieuwsitemid` = $nieuwsitemid;";
		$sql->query($query);
		return $query;
	}
	
	function DeleteNewsItem($id){
		$db = Database::getInstance ();
		$sql = $db->getConnection ();
		
		$nieuwsitemid = $sql->real_escape_string ( $id );

		$query = "DELETE FROM `nieuwsitems`
					WHERE `nieuwsitemid` = $nieuwsitemid;";
		try {
			$sql->query($query);
			header('Location: admin.php?controller=editnewsitems&action=Succes');
		} catch (Exception $e) {
			header('Location: admin.php?controller=editnewsitems&action=Error');
		} 
	}
	
}
?>