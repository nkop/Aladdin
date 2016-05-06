<?php
class EditFaqController {
	private $_categorieen;
	private $_faqs;
	private $_smarty;
	function getAll() {
		include ('Model/CMS/faq.class.php');
		include ('Model/CMS/faqcategorie.class.php');
		include ('Model/CMS/faqModel.php');
		
		$this->_categorieen = getCategories ();
		$this->_faqs = getFaqs ();
	}
	function Index($smarty) {
		if ($smarty == null) {
			global $smarty;
			$this->_smarty = $smarty;
		}
		$this->getAll ();
		$smarty->assign ( 'categorieen', $this->_categorieen );
		$smarty->assign ( 'faqs', $this->_faqs );
		$smarty->display ( '../View/CMS/editFaq.tpl' );
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


