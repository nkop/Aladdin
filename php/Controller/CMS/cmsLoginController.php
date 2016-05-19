<?php

class CmsLoginController{
    
    private $LoginError = false;
	private $username = "";

  function SetError(){
    if(isset($_GET['status'])){
    $status = strtolower(htmlspecialchars($_GET['status']));
    switch ($status) {
        case "fail":
            $this->LoginError = true;
            break;
          }
      }
  }
  
	//show
	function Index($smarty){
		if ($smarty == null) {
			global $smarty;
		}
		$this->SetError();
		$smarty->assign('LoginError', $this->LoginError);
		$smarty->display('../View/CMS/cmsLogin.tpl');
	}
}

?>