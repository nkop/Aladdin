<?php
include ('../../../Model/CMS/editPagesModel.php');
include ('../../../Model/CMS/textarea.class.php');

if (isset ( $_POST ["submit"] ) && isset ( $_POST ["header"] ) && isset ( $_POST ["tekstvaktekst"] )) {
	$tekstvak = new Tekstvak ();
	$tekstvak->tekstvakid = $_POST ["tekstvakid"];
	$tekstvak->header = $_POST ["header"];
	$tekstvak->tekstvaktekst = $_POST ["tekstvaktekst"];
	$tekstvak->pagina_paginanaam = "homepage";
	
	if (! saveTekstvak ( $tekstvak )) {
		header ( 'location: ../../../admin.php?controller=edithome&action=noSuccess' );
	} else {
		$teksten = getTekstvakken ( "homepage" );
		header ( 'location: ../../../admin.php?controller=edithome&action=Success' );
	}
}