<?php
/**
 * @author Gabriel de Almeida
 */
class confirmEmailCtl extends Controller
{
	public $data = [];
    private $model;

	function __construct()
	{
		$this->model = new confirmEmailModel();
		$this->alreadyLogin();
	}

	public function main(){
		//$data['activeEmail'] = $this->model->setActivationEmail();
		$data['activeEmail'] = '';
		return $data;
	}

	private function alreadyLogin(){
		if(!isset($_SESSION['email'])){
			echo "<script>window.location.href = '".BASE_URL."';</script>";
		}
	}

}