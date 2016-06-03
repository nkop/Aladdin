<?php
class aboutController{	
function Index($smarty) {
		include_once 'Model/CMS/aboutModel.php';
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->assign ( 'abouts', getAbouts () );
		$smarty->display ( 'about.tpl' );
	}

}
?>