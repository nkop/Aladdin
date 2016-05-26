<?php
class MatchesController{
	private $__succesfull = 0;
	
	function Accept(){
		$this->__succesfull = 1;
		$this->Index(null);
	}
	
	function Decline(){
		$this->__succesfull = 2;
		$this->Index(null);
	}
	
	function Index($smarty)
	{
		include_once 'Model/CMS/matchesModel.php';
		if ($smarty == null) {
			global $smarty;
		}
		
	}
}
