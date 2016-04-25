<?php
include ('../Smarty/header.php');
include ('../../Model/CMS/editPagesModel.php');
include ('../../Model/CMS/textarea.class.php');

$teksten = getTekstvakken("homepage");

if(isset($_POST["submit"]) && isset($_POST["header"]) && isset($_POST["tekstvaktekst"])){
	$tekstvak = new Tekstvak();
	$tekstvak->tekstvakid = $_POST["tekstvakid"];
	$tekstvak->header = $_POST["header"];
	$tekstvak->tekstvaktekst = $_POST["tekstvaktekst"];
	$tekstvak->pagina_paginanaam = "homepage";
	
	if(!saveTekstvak($tekstvak)){
		echo "mislukt";
	}
	$teksten = getTekstvakken("homepage");
	echo "'<html>
				<div class='alert alert-info'>
				  Tekst succesvol aangepast!
				</div>
				</html>'
				";
}

$smarty->assign('teksten', $teksten);
$smarty->display('../../View/CMS/editPagina.tpl');