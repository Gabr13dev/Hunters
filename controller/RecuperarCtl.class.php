<?php
/**
 * @author Gabriel de Almeida
 */
class RecuperarCtl extends Controller
{
	public $data = [];
    private $model;

	function __construct()
	{
		$this->model = new RecuperarModel();
	}

	public function main(){
		//$data['curriculos'] = $this->model->getCurriculos();
		//$data['num_curriculos'] = $this->model->getCountCurrs();
		$data['var_teste'] = 'teste';
		return $data;
	}

}