<?php

/**
 * @author Gabriel de Almeida
 */
class CadastroModel extends Model
{
	private $Model;
	
	function __construct()
	{
		$this->Model = new Model();
	}

	function getPaises(){
		$sql = 'SELECT * FROM `pais` ';
		return $this->Model->getData($sql);
	}

}