<?php
class footerController{

	function Index($smarty){
		if ($smarty==null)
			global $smarty;

			include_once 'Model/CMS/newsItemModel.php';
			$model = new NewsItemModel();

			$newsItems = $model->getTop5News();

			$smarty->assign('newsItems', $newsItems);
	}
}
$footer = new footerController();
$footer->Index(null)
?>