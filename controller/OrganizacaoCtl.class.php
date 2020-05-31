<?php
/**
 * @author Gabriel de Almeida
 */
class OrganizacaoCtl extends Controller
{
	public $data = [];
    private $model;

	function __construct()
	{
		$this->model = new OrganizacaoModel();
	}

	public function main(){
		//$data['curriculos'] = $this->model->getCurriculos();
		$data['var_teste'] = 'teste';
		return $data;
	}

}