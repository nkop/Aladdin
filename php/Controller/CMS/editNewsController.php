<?php
/*
 * @author Ferry Zijlmans
 */
include_once 'Model/CMS/newsItem.class.php';

class EditNewsController{
	private $newsItems = null;
	
	function Delete($id){
		include_once 'Model/CMS/newsItemModel.php';
		$model = new NewsItemModel();
		if (ctype_digit($id))// Number is integer
			$this->newsItems = $model->DeleteNewsItem($id);
		else
			$this->Index(null);
	}

	//get all newsitem
	function NewsItem($id){
		include_once 'Model/CMS/newsItemModel.php';
		$model = new NewsItemModel();
		if (ctype_digit($id))// Number is integer
			$this->newsItems = $model->GetByID($id);
		else 
			$this->newsItems = $model->newNews();
		$this->Index(null);
	}
	
	//new newsitem
	function GetEmptyNews() {
		include_once 'Model/CMS/newsItemModel.php';
		$model = new NewsItemModel();
		$this->newsItems = $model->newNews();
	}

	//show
	function Index($smarty){
		if ($this->newsItems==null)
		$this->GetEmptyNews();
		global $smarty;

		$smarty->assign('newsItem', $this->newsItems);
		$smarty->display('../View/CMS/newsEdit.tpl');
	}
}
?>
