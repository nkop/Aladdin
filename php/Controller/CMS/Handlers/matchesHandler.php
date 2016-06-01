<?php

/*
 * @author Niels Kop
 */
include_once '../../../Model/CMS/matchesModel.php';

Class MatchesHandler{
	
	private $__matchModel;
	private $matchesHandler;
	private $__succes = "location: ../../../admin.php?controller=matches&action=accept";
	private $__failure = "location: ../../../admin.php?controller=matches&action=decline";
	
	public function __construct(){
		$this->__matchModel = new MatchesModel();
		
		if(isset($_POST["accept"])){			
			if($this->__matchModel->AcceptMatch($_POST["matchID"])){
				header($this->__succes);
			} else { header($this->__failure); }			
		}
		if(isset($_POST["decline"])){
			if($this->__matchModel->DeclineMatch($_POST["matchID"])){
				header($this->__succes);
			} else { header($this->__failure); }
		}
		if(isset($_POST["matcher"])){
			$this->__matchModel->GenerateMatches();
			header("location: ../../../admin.php?controller=matches&action=index");
		}
	}
}

$matchesHandler = new MatchesHandler();