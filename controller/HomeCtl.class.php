<?php
/**
 * @author Gabriel de Almeida
 */
class HomeCtl extends Controller
{
	public $data = [];
    private $model;

	function __construct()
	{
		$this->model = new HomeModel();
	}

	public function main(){
		$data['var_teste'] = $this->model->getUsuario();
		return $data;
	}

}