<?php

class CmsLoginController{
    
    private $loginError = false;
	private $username = "";

	//show
	function Index($smarty){
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->assign('username', $this->username);
		$smarty->assign('loginError', $this->loginError);
		$smarty->display('../View/CMS/cmsLogin.tpl');
	}
}

?>