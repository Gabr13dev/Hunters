<?php
/**
 * @author Gabriel de Almeida
 */
class CadastroCtl extends Controller
{
	public $data = [];
    private $model;

	function __construct()
	{
		$this->model = new CadastroModel();
	}

	public function main(){
		//$data['curriculos'] = $this->model->getCurriculos();
		$data['nations'] = $this->model->getPaises();
		$data['cadastroJavaScript'] = 'teste';
		return $data;
	}

}