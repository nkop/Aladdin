<?php
/*
 * @author Ferry Zijlmans
*/
  include_once '../../../Model/CMS/sponsorModel.php';
class sponsorHandler{
	private $sponsor, $model, $afbeelding;
	
	public function __construct() {
      
		$this->model = new sponsorModel();
		$this->sponsor = $this->model->newSponsor();
        var_dump($_POST);
			if (isset($_POST['naam']) && isset($_POST['url']) && isset($_POST['cijfer']) && 
					 isset($_POST['sponsorID'])&&
					(sizeof($_FILES)>1 || isset($_POST['afbeeldingHidden']))){
				$this->sponsor->sponsor_id = $_POST['sponsorID'];
				$this->sponsor->naam = $_POST['naam'];
				$this->sponsor->url = trim($_POST['url']);
                $this->sponsor->cijfer = trim($_POST['cijfer']);
				
				$this->sponsor->afbeelding = $this->SaveImage('afbeelding');
				if (!preg_match('/(\.jpg|\.png|\.bmp)$/', $this->sponsor->afbeelding)) {
					$this->sponsor->afbeelding = $_POST['afbeeldingHidden'];
				}
				if ($this->sponsor->sponsor_id > 0)
				 	echo $this->model->editSponsor($this->sponsor);
				else
					 echo $this->model->InsertSponsor($this->sponsor);
			}
			
			header('Location: ../../../admin.php?controller=editSponsorItems&action=Succes');
	}
	
	//upload the image directly to the view directory
	function SaveImage($inputname){
		$tmpFile = $_FILES[$inputname]['tmp_name'];
		$newFile = '../../../View/CMS/Assets/img/sponsors/'.$_FILES[$inputname]['name'];
		$result = move_uploaded_file($tmpFile, $newFile);
		return $newFile;
	}
}
$sponsorHandler = new sponsorHandler();
?>