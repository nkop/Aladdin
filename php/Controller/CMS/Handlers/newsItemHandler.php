<?php
/*
 * @author Ferry Zijlmans
*/
include_once '../../../Model/CMS/newsItemModel.php';
class NewsItemHandler{
	//declare
	private $newsitem, $model, $thumbnailVideo, $newThumb;
	
	public function __construct() {
		$this->model = new NewsItemModel();
		$this->newsitem = $this->model->newNews();
			if (isset($_POST['title']) && isset($_POST['tekst']) && 
					 isset($_POST['nieuwsItemID'])&&
					(sizeof($_FILES)>1 || isset($_POST['thumbnailVideo']))){
				$this->newsitem->nieuwsitemid = $_POST['nieuwsItemID'];
				$this->newsitem->titel = $_POST['title'];
				$this->newsitem->tekst = trim($_POST['tekst']);
				
				$this->newsitem->bannerfoto = $this->SaveImage('bannerPicture');
				if (!preg_match('/(\.jpg|\.png|\.bmp)$/', $this->newsitem->bannerfoto)) {
					$this->newsitem->bannerfoto = $_POST['bannerPictureHidden'];
				}
				session_start();
				$this->newsitem->auteur = $_SESSION['user_id'];
				
				if (strlen($_POST['thumbnailVideo'])>0) {
					$this->newsitem->thumbnail = $_POST['thumbnailVideo'];
					$this->newsitem->isvideo = 1;
				}
				else{
					$this->newsitem->thumbnail = $this->SaveImage('thumbnailPicture');
					if (!preg_match('/(\.jpg|\.png|\.bmp)$/', $this->newsitem->thumbnail)) {
						$this->newsitem->thumbnail = $_POST['thumbnailPictureHidden'];
					}
					$this->newsitem->isvideo = 0;
				}
				if ($this->newsitem->nieuwsitemid > 0){
					if( $this->model->editNewItem($this->newsitem))
				 		header('Location: ../../../admin.php?controller=editnewsitems&action=Succes');
				 	else
				 		header('Location: ../../../admin.php?controller=editnewsitems&action=Error');
				}
				else{
					if( $this->model->InsertNewItem($this->newsitem))
						header('Location: ../../../admin.php?controller=editnewsitems&action=Succes');
					else
						header('Location: ../../../admin.php?controller=editnewsitems&action=Error');
				}
			}
	}
	
	//upload the image directly to the view directory
	function SaveImage($inputname){
		$tmpFile = $_FILES[$inputname]['tmp_name'];
		$newFile = '../../../View/CMS/Assets/img/NewsItems/'.$_FILES[$inputname]['name'];
		$result = move_uploaded_file($tmpFile, $newFile);
		return $newFile;
	}
}
$NewsItemHandler = new NewsItemHandler();
?>