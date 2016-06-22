<?php
class EditFaqController {
	private $_categorieen;
	private $_faqs;
	private $_smarty;
	private $_succesfull;
	private $_model;
	function __construct(){
		include ('Model/CMS/faq.class.php');
		include ('Model/CMS/faqcategorie.class.php');
		include ('Model/CMS/faqModel.php');
		$this->_model = new FaqModel();
	}
	function getAll() {		
		$this->_categorieen = $this->_model->getCategories ();
		$this->_faqs = $this->_model->getFaqs ();
	}
	function Index($smarty) {
		if ($smarty == null) {
			global $smarty;
			$this->_smarty = $smarty;
		}
		$this->getAll ();
		if ($this->_succesfull != 1 && $this->_succesfull != 2) {
			$this->_succesfull = 0;
		}
		$this->_smarty->assign ( 'Succesfull', $this->_succesfull );
		$smarty->assign ( 'categorieen', $this->_categorieen );
		$smarty->assign ( 'faqs', $this->_faqs );
		$smarty->display ( '../View/CMS/editFaq.tpl' );
	}
	function success(){
		$this->_succesfull = 1;
		$this->Index($this->_smarty);
	}
	function noSuccess(){
		$this->_succesfull = 2;
		$this->Index($this->_smarty);
	}
}


