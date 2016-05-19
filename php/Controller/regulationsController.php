<?php
class regulationsController{	
function Index($smarty) {
		include_once 'Model/CMS/regulationsModel.php';
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->assign ( 'regelcategorieen', getRuleCategories () );
		$smarty->assign ( 'regels', getRules () );
		$smarty->display ( 'regulations.tpl' );
	}

}
?>