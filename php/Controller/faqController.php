<?php
/*
 * @author: Niels Kop
 */

class FaqController {
	private $model=null;
	function Index($smarty) {
		include_once 'Model/CMS/faqModel.php';
		$this->model = new FaqModel();
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->assign ( 'categorieen', $this->model->getCategories () );
		$smarty->assign ( 'faqs', $this->model->getFaqs () );
		$smarty->display ( 'faq.tpl' );
	}
}

?>