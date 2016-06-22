<?php
include ('../../../Model/CMS/rule.class.php');
include ('../../../Model/CMS/ruleCategorie.class.php');
include ('../../../Model/CMS/regulationsModel.php');

class editRegulationsHandler{
	private $model = null;
	public function __construct(){
		$this->model = new regulationsModel();
		// mogelijke submits: submitfaq, deletefaq, deletecategorie, nieuwcat, nieuwfaq'
		
		if (isset ( $_POST ["submitregel"] ) && isset ($_POST["categorienaam"]) && isset ( $_POST ["categorie_id"] ) && isset ( $_POST ["tekst"] )) {
			$rulecategorie = new RuleCategorie();
			$rule = new Rule();
		
			$rule->tekst = $_POST ["tekst"];
			$rule->categorie_id = $_POST ["categorie_id"];
			$rule->id = $_POST ["id"];
		
			$rulecategorie->id = ($_POST["categorieID"]);
			$rulecategorie->naam = ($_POST["categorienaam"]);
		
			if (! $this->model->saveRule ( $rule, true ) && ! $this->model->saveRuleCategorie($rulecategorie, true)) {
				header ( 'location: ../../../admin.php?controller=editregulations&action=noSuccess' );
			} else {
				header ( 'location: ../../../admin.php?controller=editregulations&action=Success' );
			}
		}
		
		if (isset ( $_POST ["resetpage"] )) {
			header ( 'location: ../../../admin.php?controller=editregulations');
		}
		
		if (isset ( $_POST ["deleteregel"] )) {
			$id = $_POST ["id"];
			if ($this->model->deleteRule ( $id )) {
				header ( 'location: ../../../admin.php?controller=editregulations&action=Success' );
			} else {
				header ( 'location: ../../../admin.php?controller=editregulations&action=noSuccess' );
			}
		}
		if (isset ( $_POST ["nieuwcat"] )) {
			$rule = new RuleCategorie();
			$rule->naam = $_POST ["nieuwecategorie"];
			if ($this->model->insertRuleCategorie ( $rule )) {
				header ( 'location: ../../../admin.php?controller=editregulations&action=Success' );
			} else {
				header ( 'location: ../../../admin.php?controller=editregulations&action=noSuccess' );
			}
		}
		if (isset ( $_POST ["newregel"] )) {
			$rule = new Rule ();
			$rule->tekst = $_POST ["tekst"];
			$rule->categorie_id = $_POST ["categorie_id"];
			$rule->id = $_POST ["id"];
			if ($this->model->saveRule ( $rule, false )) {
				header ( 'location: ../../../admin.php?controller=editregulations&action=Success' );
			} else {
				header('location: ../../../admin.php?controller=editregulations&action=noSuccess');
			}
		}
		
		if (isset ( $_POST ["deletecategorie"] )) {
			$categorie_id = $_POST ["categorie_id"];
			if ($this->model->deleteRuleCategorie ( $categorie_id )) {
				header('location: ../../../admin.php?controller=editregulations&action=Success');
			} else {
				header('location: ../../../admin.php?controller=editregulations&action=noSuccess');
			}
		}
	}
}
$editRegulationsHandlers = new editRegulationsHandler();

