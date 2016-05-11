<?php
class newsController{
	
	function Index($smarty){
		if ($smarty==null)
		global $smarty;
		
		include_once 'Model/CMS/newsItemModel.php';
		$model = new NewsItemModel();
		
		$newsItems = $model->GetAll();
		
		$smarty->assign('newsItems', $newsItems);
		$smarty->display("news.tpl");
	}
}
?>