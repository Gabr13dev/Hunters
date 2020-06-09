<?php
/**
 * @author Gabriel de Almeida
 */
class OrganizacaoCtl extends Controller
{
	public $data = [];
	private $model;
	private $parent;

	function __construct()
	{
		$this->model = new OrganizacaoModel();
		$this->parent = new parent();
	}

	public function main(){
		$data['var_teste'] = 'teste';
		$this->parent->getFirstLetter('');
		return $data;
	}

}