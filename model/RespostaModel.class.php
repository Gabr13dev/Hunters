<?php

/**
 * @author Gabriel de Almeida
 */
class RespostaModel extends Model
{
	private $Model;
	
	function __construct()
	{
		$this->Model = new Model();
	}

	function getCountCurrs(){
		$sql = 'QUERY';
		return $this->Model->getData($sql);
	}
}