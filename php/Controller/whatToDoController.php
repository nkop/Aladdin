<?php 
class whatToDoController{
	
	function Index($smarty){
		if ($smarty==null)
		global $smarty;
		
		$smarty->display("whatToDo.tpl");
	}
}

?>