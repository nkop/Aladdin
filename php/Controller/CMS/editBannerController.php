<?PHP
/*
 * @author Ferry Zijlmans
 */
 include_once 'Model/CMS/banner.class.php';

class editBannerController{
	private $banner = null;
    private $model = null;
    
    function __construct(){
        include_once 'Model/CMS/bannerModel.php';
        $this->model = new bannerModel();
    }
	
	function Delete($id){
		if (ctype_digit($id))// Number is integer
			if ($this->banner = $this->model->DeleteBanner($id))
				header('Location: admin.php?controller=editBannerItems&action=Succes');
			else 
				header('Location: ../../../admin.php?controller=editBannerItems&action=Error');
		else
			$this->Index(null);
	}

	//get all sponsor
	function banner($id){
		if (ctype_digit($id))// Number is integer
			$this->banner = $this->model->GetByID($id);
		else 
			$this->banner = $this->model->NewBanner();
		$this->Index(null);
	}
	
	//new sponsor
	function GetEmptySponsor() {
		$this->banner = $this->model->NewBanner();
	}

	//show
	function Index($smarty){
		if ($this->banner==null)
		$this->GetEmptySponsor();
		global $smarty;

		$smarty->assign('banner', $this->banner);
		$smarty->display('../View/CMS/bannerEdit.tpl');
	}
}
?>