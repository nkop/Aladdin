<?php
include ('../../../Model/CMS/about.class.php');
include ('../../../Model/CMS/aboutModel.php');

// mogelijke submits: submitfaq, deletefaq, deletecategorie, nieuwcat, nieuwfaq'

if (isset ( $_POST ["submitabout"] ) && isset ( $_POST ["tekst"] )) {
	$about = new About();
	
	$about->tekst = $_POST ["tekst"];
	$about->id = $_POST ["id"];
	
	
	if (! saveAbout ( $about, true )) {
		header ( 'location: ../../../admin.php?controller=editabout&action=noSuccess' );
	} else {
		header ( 'location: ../../../admin.php?controller=editabout&action=Success' );
	}
	$about = getAbouts();
}

if (isset ( $_POST ["resetpageabout"] )) {
		header ( 'location: ../../../admin.php?controller=editabout');
	$about = getAbouts();
}