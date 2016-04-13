<?php
include ('../Smarty/header.php');
include ('../../Model/CMS/faq.class.php');
include ('../../Model/CMS/faqcategorie.class.php');
include ('../../Model/CMS/faqModel.php');

$categorieen = getCategories();
$faqs = getFaqs();

//mogelijke submits: submitfaq, deletefaq, deletecategorie, nieuwcat, nieuwfaq


if(isset($_POST["submitfaq"]) && isset($_POST["categorie"]) && isset($_POST["vraag"]) && isset($_POST["antwoord"])){
	$faq = new Faq();
	$faq->vraag = $_POST["vraag"];
	$faq->antwoord = $_POST["antwoord"];
	$faq->categorie = $_POST["categorie_id"];
	$faq->id = $_POST["id"];
		if(!saveFaq($faq, true)){
			echo "'<html>
				<div class='alert alert-danger'>
				  Er ging iets fout. Controleer de velden en probeer het opnieuw.
				</div>
				</html>'
				";
		}
		echo "'<html>
				<div class='alert alert-info'>
				  Faq succesvol aangepast!
				</div>
				</html>'
				";
		$faqs = getFaqs();
}

if(isset($_POST["deletefaq"])){
	$id = $_POST["id"];
	if(deleteFaq($id)){
		echo "'<html>
				<div class='alert alert-info'>
				  Faq succesvol verwijderd!
				</div>
				</html>'
				";
	} else {
		echo "'<html>
				<div class='alert alert-danger'>
				  Er ging iets fout. Controleer de velden en probeer het opnieuw.
				</div>
				</html>'
				";
	}
	$faqs = getFaqs();
}

if(isset($_POST["nieuwcat"])){
	$header = $_POST["nieuwecategorie"];
	if(insertCategorie($header)){
		echo "'<html>
				<div class='alert alert-info'>
				  Categorie succesvol toegevoegd!
				</div>
				</html>'
				";
	} else {
		echo "'<html>
				<div class='alert alert-danger'>
				  Er ging iets fout. Controleer de velden en probeer het opnieuw.
				</div>
				</html>'
				";
	}
	$categorieen = getCategories();
}

if(isset($_POST["nieuwfaq"])){
	$faq = new Faq();
	$faq->vraag = $_POST["nieuwvraag"];
	$faq->antwoord = $_POST["nieuwantwoord"];
	$faq->categorie_id = $_POST["nieuwcategorie"];
	if(saveFaq($faq, false)){
		echo "'<html>
				<div class='alert alert-info'>
				  Faq succesvol toegevoegd!
				</div>
				</html>'
				";
	} else {
		echo "'<html>
				<div class='alert alert-danger'>
				  Er ging iets fout. Controleer de velden en probeer het opnieuw.
				</div>
				</html>'
				";
	}
	$faqs = getFaqs();
}
if(isset($_POST["deletecategorie"])){
	$categorie_id = $_POST["categorie_id"];
	if(deleteCategorie($categorie_id)){
		echo "'<html>
				<div class='alert alert-info'>
				  Categorie inclusief faqs succesvol verwijderd!
				</div>
				</html>'
				";
	} else {
		echo "'<html>
				<div class='alert alert-danger'>
				  Er ging iets fout. Controleer de velden en probeer het opnieuw.
				</div>
				</html>'
				";
	}
	$categorieen = getCategories();
	$faqs = getFaqs();
}


$smarty->assign('categorieen', $categorieen);
$smarty->assign('faqs', $faqs);
$smarty->display('../../View/CMS/editFaq.tpl');