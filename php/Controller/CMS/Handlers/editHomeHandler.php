<?php
/*
 * @author: Niels Kop
 */
include ('../../../Model/CMS/editPagesModel.php');
include ('../../../Model/CMS/textarea.class.php');
class EditHomeHandler {
	function __construct() {
		$model = new EditPagesModel ();
		
		if (isset ( $_POST ["submit"] ) && isset ( $_POST ["header"] ) && isset ( $_POST ["tekstvaktekst"] )) {
			$tekstvak = new Tekstvak ();
			$tekstvak->tekstvakid = $_POST ["tekstvakid"];
			$tekstvak->header = $_POST ["header"];
			$tekstvak->tekstvaktekst = $_POST ["tekstvaktekst"];
			$tekstvak->pagina_paginanaam = "homepage";
			
			if (! $model->saveTekstvak ( $tekstvak )) {
				header ( 'location: ../../../admin.php?controller=edithome&action=noSuccess' );
			} else {
				$teksten = $model->getTekstvakken ( "homepage" );
				header ( 'location: ../../../admin.php?controller=edithome&action=Success' );
			}
		}
	}
}

$handler = new EditHomeHandler();