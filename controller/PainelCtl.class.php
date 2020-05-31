<?php
/**
 * @author Gabriel de Almeida
 */
class PainelCtl extends Controller
{
	public $data = [];
    private $model;

	function __construct()
	{
		$this->model = new PainelModel();
	}

	public function main(){
		//$data['curriculos'] = $this->model->getCurriculos();
		$data['var_teste'] = 'teste';
		$data['Orgs'] = $this->model->getOrgs();
		return $data;
	}

	private function getMaiorOrg(){
		$arrOrgs = $this->model->getOrgs();
		return $arrOrgs[0];
	}

}