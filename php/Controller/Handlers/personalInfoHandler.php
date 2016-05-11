<?php
/*
 * @author Wouter van de Ven
 * */
include_once '../../Model/DB/Database.class.php';
include_once '../../Model/personalInfoModel.php';

class PersonalInfoHandler{
	//declare
	private $personalInfo="";
	
	public function __construct() {
		if (isset ( $_POST ['submit'] ) && isset ( $_POST ['accountid'] ) && isset ( $_POST ['FirstNameInput'] ) && isset ( $_POST ['LastNameInput'] ) && isset ( $_POST ['ZipCodeInput'] ) && isset ( $_POST ['HouseNumberInput'] ) && isset ( $_POST ['StreetInput'] ) && isset ( $_POST ['CityInput'] ) && isset ( $_POST ['EmailInput'] )){
				$this->pass();			
		}
	}

	function pass(){
		//create the model object and try to update
		$personalInfoModel = new personalInfoModel();
		if($personalInfoModel->updateUser($_POST ['accountid'], $_POST ['FirstNameInput'], $_POST ['MiddleNameInput'], $_POST ['LastNameInput'], $_POST ['ZipCodeInput'], $_POST ['HouseNumberInput'], $_POST ['StreetInput'], $_POST ['CityInput'], $_POST ['EmailInput'])){
			header('Location: ../../index.php?controller=personalInfo&action=Index');
		}
		else{
			header('Location: ../../index.php?controller=personalInfo&action=Index');
		}
	}
}
//call own class(direct from the href/post)
$personalInfo = new PersonalInfoHandler();
?>