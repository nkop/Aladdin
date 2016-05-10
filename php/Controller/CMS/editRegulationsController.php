<?php
class EditRegulationsController {
	private $_categorieen;
	private $_rules;
	private $_smarty;
	
	function getAll() {
		include ('Model/CMS/rule.class.php');
		include ('Model/CMS/ruleCategorie.class.php');
		include ('Model/CMS/regulationsModel.php');
		
		$this->_categorieen = getRuleCategories ();
		$this->_rules = getRules();
	}
	function Index($smarty) {
		if ($smarty == null) {
			global $smarty;
			$this->_smarty = $smarty;
		}
		$this->getAll ();
		$smarty->assign ( 'categorieen', $this->_categorieen );
		$smarty->assign ( 'rules', $this->_rules );
		$smarty->display ( '../View/CMS/regulationsEdit.tpl' );
	}
	
	function success(){
		echo "<html>
				<div class='alert alert-info'>
				  Actie succesvol!
				</div>
				</html>
				";
		$this->Index($this->_smarty);
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