<?php
class EditHomeController {
	private $_teksten;
	private $_smarty;
	function getAll() {
		include ('Model/CMS/editPagesModel.php');
		include ('Model/CMS/textarea.class.php');
		$this->_teksten = getTekstvakken ( "homepage" );
	}
	function Index($smarty) {
		if ($smarty == null) {
			global $smarty;
			$this->_smarty = $smarty;
		}
		$this->getAll ();
		$smarty->assign ( 'teksten', $this->_teksten );
		$smarty->display ( '../View/CMS/editPage.tpl' );
	}
	function success() {
		echo "<html>
				<div class='alert alert-info'>
				  Website tekst succesvol aangepast!
				</div>
				</html>
				";
		$this->Index ( $this->_smarty );
	}
	function noSuccess(){
		echo "<html>
				<div class='alert alert-danger'>
				  Er ging iets fout. Controleer de velden en probeer het opnieuw.
				</div>
				</html>
				";
		$this->Index($this->_smarty);
	}
}