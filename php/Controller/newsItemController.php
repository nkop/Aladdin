<?php
class newsItemController{
	private $newsItem = NULL;
	
	function News($id){
		if (ctype_digit($id)){//digit
			include_once 'Model/CMS/newsItemModel.php';
			$model = new NewsItemModel();
			$this->newsItem = $model->GetByID($id);
		}
		$this->Index(null);
	}
	
	
	function Index($smarty){
		if ($this->newsItem == null)
			header("");
		if ($smarty == null);
		global $smarty;
		
		$smarty->assign('newsitem', $this->newsItem);
		$smarty->display("newsItem.tpl");
	}
}


?>