<?php
class EditAboutController {
	private $_about;
	private $_smarty;
	private $succesfull = 0;
	
	function Success(){
		$this->succesfull = 1;
		$this->Index(null);
	}
	
	function Error(){
		$this->succesfull = 2;
		$this->Index(null);
	}
	
	function getAll() {
		include ('Model/CMS/about.class.php');
		include ('Model/CMS/aboutModel.php');
	
		$this->_about = getAbouts();
	}
	function Index($smarty) {
		if ($smarty == null) {
			global $smarty;
			$this->_smarty = $smarty;
		}
		$this->getAll ();
		$smarty->assign ('succesfull', $this->succesfull);
		$smarty->assign ( 'abouts', $this->_about );
		$smarty->display ( '../View/CMS/aboutEdit.tpl' );
	}
	
}