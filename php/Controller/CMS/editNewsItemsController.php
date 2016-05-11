<?php
/*
 * @author Ferry Zijlmans
 */
include_once 'Model/CMS/newsItem.class.php';

class EditNewsItemsController{
	private $newsItems = array();
	private $succesfull = 0;
	
	function Succes(){
		$this->succesfull = 1;
		$this->Index(null);
	}
	
	function Error(){
		$this->succesfull = 2;
		$this->Index(null);
	}
	
	//get all nieuwsitems
	function LoadNewsItems(){
		include_once 'Model/CMS/newsItemModel.php';
		$model = new NewsItemModel();
		$this->newsItems = $model->GetAll();
	}
	
	//show
	function Index($smarty){
		if ($smarty == null) {
			global $smarty;
		}
		$this->LoadNewsItems();
		
		$smarty->assign('Succesfull', $this->succesfull);
		$smarty->assign('newsItems', $this->newsItems);
		$smarty->display('../View/CMS/newsItemsEdit.tpl');
	}
}
?>
