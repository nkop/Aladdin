<?PHP
/*
 * @author Ferry Zijlmans
 */
 include_once 'Model/CMS/sponsor.class.php';

class EditSponsorController{
	private $sponsor = null;
    private $model = null;
    
    function __construct(){
        include_once 'Model/CMS/sponsorModel.php';
        $this->model = new sponsorModel();
    }
	
	function Delete($id){
		
		
		if (ctype_digit($id))// Number is integer
			$this->sponsor = $this->model->DeleteSponsor($id);
		else
			$this->Index(null);
	}

	//get all sponsor
	function sponsor($id){
		if (ctype_digit($id))// Number is integer
			$this->sponsor = $this->model->GetByID($id);
		else 
			$this->sponsor = $this->model->newSponsor();
		$this->Index(null);
	}
	
	//new sponsor
	function GetEmptySponsor() {
		$this->sponsor = $this->model->newSponsor();
	}

	//show
	function Index($smarty){
		if ($this->sponsor==null)
		$this->GetEmptyNews();
		global $smarty;

		$smarty->assign('sponsor', $this->sponsor);
		$smarty->display('../View/CMS/sponsorEdit.tpl');
	}
}
?>