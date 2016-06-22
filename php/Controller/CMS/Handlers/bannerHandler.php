<?php
/*
 * @author Ferry Zijlmans
*/
  include_once '../../../Model/CMS/bannerModel.php';
class bannerHandler{
	//declare
	private $banner, $model, $afbeelding_groot, $afbeelding_klein;
	
	public function __construct() {
		$this->model = new bannerModel();
		$this->banner = $this->model->NewBanner();
		//handle the post
			if (isset($_POST['bannerID'])&&
					(sizeof($_FILES)>1 || isset($_POST['afbeelding_grootHidden']))){
				$this->banner->banner_id = $_POST['bannerID'];
				$this->banner->tekst = $_POST['tekst'];
				
				//check format's
				$this->banner->afbeelding_groot = $this->SaveImage('afbeelding_groot');
				if (!preg_match('/(\.jpg|\.png|\.bmp)$/', $this->banner->afbeelding_groot)) {
					$this->banner->afbeelding_groot = $_POST['afbeelding_grootHidden'];
				}
				$this->banner->afbeelding_klein = $this->SaveImage('afbeelding_klein');
				if (!preg_match('/(\.jpg|\.png|\.bmp)$/', $this->banner->afbeelding_klein)) {
					$this->banner->afbeelding_klein = $_POST['afbeelding_kleinHidden'];
				}
				
				if ($this->banner->banner_id > 0){
				 	if( $this->model->EditBanner($this->banner))
				 		header('Location: ../../../admin.php?controller=editBannerItems&action=Succes');
				 	else
				 		header('Location: ../../../admin.php?controller=editBannerItems&action=Error');
				}
				else{
					if( $this->model->InsertBanner($this->banner))
						header('Location: ../../../admin.php?controller=editBannerItems&action=Succes');
					else
						header('Location: ../../../admin.php?controller=editBannerItems&action=Error');
				}
			}
	}
	
	//upload the image directly to the view directory
	function SaveImage($inputname){
		$tmpFile = $_FILES[$inputname]['tmp_name'];
		$newFile = '../../../View/CMS/Assets/img/Banners/'.$_FILES[$inputname]['name'];
		$result = move_uploaded_file($tmpFile, $newFile);
		return $newFile;
	}
}
$bannerHandler = new bannerHandler();
?>