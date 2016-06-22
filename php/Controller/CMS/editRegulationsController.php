<?php
class EditRegulationsController {
	private $_categorieen;
	private $_rules;
	private $_smarty;
	private $succesfull = 0;
	private $model = null;
	
	function __construct(){
		include ('Model/CMS/rule.class.php');
		include ('Model/CMS/ruleCategorie.class.php');
		include ('Model/CMS/regulationsModel.php');
		$this->model = new regulationsModel();
	}
	
	function Success(){
		$this->succesfull = 1;
		$this->Index(null);
	}
	
	function Error(){
		$this->succesfull = 2;
		$this->Index(null);
	}
	
	function getAll() {	
		$this->_categorieen = $this->model->getRuleCategories ();
		$this->_rules = $this->model->getRules();
	}
	function Index($smarty) {
		if ($smarty == null) {
			global $smarty;
			$this->_smarty = $smarty;
		}
		$this->getAll ();
		$smarty->assign ('succesfull', $this->succesfull);
		$smarty->assign ( 'categorieen', $this->_categorieen );
		$smarty->assign ( 'rules', $this->_rules );
		$smarty->display ( '../View/CMS/regulationsEdit.tpl' );
	}
	
}