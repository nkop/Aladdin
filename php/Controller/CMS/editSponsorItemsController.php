<?php
/*
 * @author Ferry Zijlmans
 */
 include_once 'Model/CMS/sponsor.class.php';
class editSponsorItemsController{
	private $sponsoren = array();
	private $succesfull = 0;
	
	function __construct(){
		include_once "Model/CMS/SponsorModel.php";
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
	function LoadSponsors(){
		include_once "Model/CMS/SponsorModel.php";
		$model = new sponsorModel();
		$this->sponsoren = $model->GetAll();
	}
	
	//show
	function Index($smarty){
		if ($smarty == null) {
			global $smarty;
		}
		$this->LoadSponsors();
		
		$smarty->assign('Succesfull', $this->succesfull);
		$smarty->assign('sponsoren', $this->sponsoren);
		$smarty->display ( '../View/CMS/sponsorItemsEdit.tpl' );
	}
	
	
}
?>