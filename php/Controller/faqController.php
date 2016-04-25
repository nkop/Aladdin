<?php
/*
 * @author: Niels Kop
 */
include_once 'Model/CMS/faqModel.php';
class FaqController {
	function Index($smarty) {
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->assign ( 'categorieen', getCategories () );
		$smarty->assign ( 'faqs', getFaqs () );
		$smarty->display ( 'faq.tpl' );
	}
}

?>