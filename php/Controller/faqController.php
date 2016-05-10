<?php
/*
 * @author: Niels Kop
 */

class FaqController {
	function Index($smarty) {
		include_once 'Model/CMS/faqModel.php';
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->assign ( 'categorieen', getCategories () );
		$smarty->assign ( 'faqs', getFaqs () );
		$smarty->display ( 'faq.tpl' );
	}
}

?>