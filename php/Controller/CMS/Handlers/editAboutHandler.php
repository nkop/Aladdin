<?php
include ('../../../Model/CMS/about.class.php');
include ('../../../Model/CMS/aboutModel.php');


class editAboutHandler{
	private $model = null;
	public function __construct(){
		$this->model = new aboutModel();
// mogelijke submits: submitfaq, deletefaq, deletecategorie, nieuwcat, nieuwfaq'

if (isset ( $_POST ["submitabout"] ) && isset ( $_POST ["tekst"] )) {
	$about = new About();
	
	$about->tekst = $_POST ["tekst"];
	$about->id = $_POST ["id"];
	
	
	if (! $this->model->saveAbout ( $about, true )) {
		header ( 'location: ../../../admin.php?controller=editabout&action=noSuccess' );
	} else {
		header ( 'location: ../../../admin.php?controller=editabout&action=Success' );
	}
	$about = $this->model->getAbouts();
}

if (isset ( $_POST ["resetpageabout"] )) {
		header ( 'location: ../../../admin.php?controller=editabout');
	$about = $this->model->getAbouts();
}
	}
}
$editAboutHandler = new EditAboutController();