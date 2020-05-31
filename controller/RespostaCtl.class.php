<?php
/**
 * @author Gabriel de Almeida
 */
class RespostaCtl extends Controller
{
	public $data = [];
    private $model;

	function __construct()
	{
		$this->model = new RespostaModel();
	}

	public function main(){
		//$data['curriculos'] = $this->model->getCurriculos();
		//$data['num_curriculos'] = $this->model->getCountCurrs();
		$data['var_teste'] = 'teste';
		return $data;
	}

}