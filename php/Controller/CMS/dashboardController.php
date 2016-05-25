<?php


class DashboardController{

	function Index($smarty){
		include ('Model/DB/Database.class.php');
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->display('../View/CMS/dashboard.tpl');
	}
}

