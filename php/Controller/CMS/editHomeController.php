<?php
class EditHomeController {
	private $_teksten;
	function getAll() {
		include ('Model/CMS/editPagesModel.php');
		include ('Model/CMS/textarea.class.php');
		$this->_teksten = getTekstvakken ( "homepage" );
	}
	function Index($smarty) {		
		if($smarty == null){
			global $smarty;
		}
		$this->getAll();
		$smarty->assign ( 'teksten', $this->_teksten );
		$smarty->display ( '../View/CMS/editPage.tpl' );
	}
}