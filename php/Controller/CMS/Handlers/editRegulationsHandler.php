<?php
include ('../../../Model/CMS/rule.class.php');
include ('../../../Model/CMS/ruleCategorie.class.php');
include ('../../../Model/CMS/regulationsModel.php');

// mogelijke submits: submitfaq, deletefaq, deletecategorie, nieuwcat, nieuwfaq'

if (isset ( $_POST ["submitregel"] ) && isset ( $_POST ["categorie_id"] ) && isset ( $_POST ["tekst"] )) {
	$rule = new Rule();
	$rule->tekst = $_POST ["tekst"];
	$rule->categorie_id = $_POST ["categorie_id"];
	$rule->id = $_POST ["id"];
	if (! saveRule ( $rule, true )) {
		header ( 'location: ../../../admin.php?controller=editregulations&action=noSuccess' );
	} else {
		header ( 'location: ../../../admin.php?controller=editregulations&action=Success' );
	}
	$rules = getRules();
}

if (isset ( $_POST ["resetpage"] )) {
		header ( 'location: ../../../admin.php?controller=editregulations');
	$rules = getRules();
}

if (isset ( $_POST ["deleteregel"] )) {
	$id = $_POST ["id"];
	if (deleteRule ( $id )) {
		header ( 'location: ../../../admin.php?controller=editregulations&action=Success' );
	} else {
		header ( 'location: ../../../admin.php?controller=editregulations&action=noSuccess' );
	}
	$rules = getRules();
}
if (isset ( $_POST ["nieuwcat"] )) {
	$rule = new RuleCategorie();
	$rule->naam = $_POST ["nieuwecategorie"];
	if (insertRuleCategorie ( $rule )) {
		header ( 'location: ../../../admin.php?controller=editregulations&action=Success' );
	} else {
		header ( 'location: ../../../admin.php?controller=editregulations&action=noSuccess' );
	}
	$categorieen = getCategories ();
}
 if (isset ( $_POST ["newregel"] )) {
 	$rule = new Rule ();
 	$rule->tekst = $_POST ["tekst"];
	$rule->categorie_id = $_POST ["categorie_id"];
	$rule->id = $_POST ["id"];
 	if (saveRule ( $rule, false )) {
 		header ( 'location: ../../../admin.php?controller=editregulations&action=Success' );
 	} else {
 		header('location: ../../../admin.php?controller=editregulations&action=noSuccess');
 	}
 	$rules = getRules ();
 }
 
if (isset ( $_POST ["deletecategorie"] )) {
	$categorie_id = $_POST ["categorie_id"];
	if (deleteRuleCategorie ( $categorie_id )) {
		header('location: ../../../admin.php?controller=editregulations&action=Success');
	} else {
		header('location: ../../../admin.php?controller=editregulations&action=noSuccess');
	}
	$categorieen = getRuleCategories();
	$rules = getRules ();
}