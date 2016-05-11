<?php
class EditHomeController {
	private $_teksten;
	private $_smarty;
	private $_succesfull;
	function getAll() {
		include ('Model/CMS/editPagesModel.php');
		include ('Model/CMS/textarea.class.php');
		$this->_teksten = getTekstvakken ( "homepage" );
	}
	function Index($smarty) {
		if ($smarty == null) {
			global $smarty;
		}
		$this->_smarty = $smarty;
		$this->getAll ();
		if ($this->_succesfull != 1 && $this->_succesfull != 2) {
			$this->_succesfull = 0;
		}
		$this->_smarty->assign ( 'Succesfull', $this->_succesfull );
		$smarty->assign ( 'teksten', $this->_teksten );
		$smarty->display ( '../View/CMS/editPage.tpl' );
	}
	function success() {
		$this->_succesfull = 1;
		$this->Index ( $this->_smarty );
	}
	function noSuccess() {
		$this->_succesfull = 2;
		$this->Index ( $this->_smarty );
	}
}