<?php
include ('../Smarty/header.php');
include ('../../Model/CMS/faq.class.php');
include ('../../Model/CMS/faqcategorie.class.php');
include ('../../Model/CMS/faqModel.php');

$categorieen = getCategories();
$faqs = getFaqs();

if(isset($_POST["submitfaq"]) && isset($_POST["categorie"]) && isset($_POST["vraag"]) && isset($_POST["antwoord"])){
	$faq = new Faq();
	$faq->vraag = $_POST["vraag"];
	$faq->antwoord = $_POST["antwoord"];
	$faq->categorie = $_POST["categorie_id"];
	$faq->id = $_POST["id"];
		if(!saveFaq($faq, true)){
			//TODO: foutmelding geven
		}
		//TODO: succes melding weergeven
		$faqs = getFaqs();
}

if(isset($_POST["deletefaq"])){
	$id = $_POST["id"];
	deleteFaq($id);
	//TODO: meldingen weergeven
	$faqs = getFaqs();
}


$smarty->assign('categorieen', $categorieen);
$smarty->assign('faqs', $faqs);
$smarty->display('../../View/CMS/editFaq.tpl');