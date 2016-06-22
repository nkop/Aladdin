<?php
/*
 * @author:Niels Kop
 */

include ('../../../Model/CMS/faq.class.php');
include ('../../../Model/CMS/faqcategorie.class.php');
include ('../../../Model/CMS/faqModel.php');
class EditFaqHandler {
	private $_model;
	// possible submits: submitfaq, deletefaq, deletecategorie, nieuwcat, nieuwfaq
	function __construct() {
		$this->_model = new FaqModel();
		
		if (isset ( $_POST ["submitfaq"] ) && isset ( $_POST ["categorie_id"] ) && isset ( $_POST ["vraag"] ) && isset ( $_POST ["antwoord"] )) {
			$faq = new Faq ();
			$faq->vraag = $_POST ["vraag"];
			$faq->antwoord = $_POST ["antwoord"];
			$faq->header = $_POST ["categorie_id"];
			$faq->id = $_POST ["id"];
			if (! $this->_model->saveFaq ( $faq, true )) {
				header ( 'location: ../../../admin.php?controller=editfaq&action=noSuccess' );
			} else {
				header ( 'location: ../../../admin.php?controller=editfaq&action=Success' );
			}
			$faqs = $this->_model->getFaqs ();
		}
		
		if (isset ( $_POST ["deletefaq"] )) {
			$id = $_POST ["id"];
			if ($this->_model->deleteFaq ( $id )) {
				header ( 'location: ../../../admin.php?controller=editfaq&action=Success' );
			} else {
				header ( 'location: ../../../admin.php?controller=editfaq&action=noSuccess' );
			}
			$faqs = $this->_model->getFaqs ();
		}
		
		if (isset ( $_POST ["nieuwcat"] )) {
			$faq = new Faq ();
			$faq->header = $_POST ["nieuwecategorie"];
			$faq->icon = $_POST ["icon"];
			if ($this->_model->insertCategorie ( $faq )) {
				header ( 'location: ../../../admin.php?controller=editfaq&action=Success' );
			} else {
				header ( 'location: ../../../admin.php?controller=editfaq&action=noSuccess' );
			}
			$categorieen = $this->_model->getCategories ();
		}
		
		if (isset ( $_POST ["nieuwfaq"] )) {
			$faq = new Faq ();
			$faq->vraag = $_POST ["nieuwvraag"];
			$faq->antwoord = $_POST ["nieuwantwoord"];
			$faq->header = $_POST ["nieuwcategorie"];
			if ($this->_model->saveFaq ( $faq, false )) {
				header ( 'location: ../../../admin.php?controller=editfaq&action=Success' );
			} else {
				header ( 'location: ../../../admin.php?controller=editfaq&action=noSuccess' );
			}
			$faqs = $this->_model->getFaqs ();
		}
		if (isset ( $_POST ["deletecategorie"] )) {
			$categorie_id = $_POST ["categorie_id"];
			if ($this->_model->deleteCategorie ( $categorie_id )) {
				header ( 'location: ../../../admin.php?controller=editfaq&action=Success' );
			} else {
				header ( 'location: ../../../admin.php?controller=editfaq&action=noSuccess' );
			}
			$categorieen = $this->_model->getCategories ();
			$faqs = $this->_model->getFaqs ();
		}
	}
}
$handler = new EditFaqHandler();
