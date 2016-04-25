<?php
include ('Model/DB/Database.class.php');

class DashboardController{

	function Index($smarty){
		if ($smarty == null) {
			global $smarty;
		}
		$smarty->display('../View/CMS/dashboard.tpl');
	}
}

