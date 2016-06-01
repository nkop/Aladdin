<?php
/*
 * @author Ferry Zijlmans
 */
 include_once 'Model/CMS/banner.class.php';
class editBannerItemsController{
	private $banners = array();
	private $succesfull = 0;
	
	function __construct(){
		include_once "Model/CMS/bannerModel.php";
	}
	
	function Succes(){
		$this->succesfull = 1;
		$this->Index(null);
	}
	
	function Error(){
		$this->succesfull = 2;
		$this->Index(null);
	}
	
	//get all nieuwsitems
	function Loadbanners(){
		include_once "Model/CMS/bannerModel.php";
		$model = new bannerModel();
		$this->banners = $model->GetAll();
	}
	
	//show
	function Index($smarty){
		if ($smarty == null) {
			global $smarty;
		}
		$this->Loadbanners();
		
		$smarty->assign('Succesfull', $this->succesfull);
		$smarty->assign('banners', $this->banners);
		$smarty->display ( '../View/CMS/bannerItemsEdit.tpl' );
	}
	
	
}
?>