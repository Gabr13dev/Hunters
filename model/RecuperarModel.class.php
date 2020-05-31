<?php

/**
 * @author Gabriel de Almeida
 */
class RecuperarModel extends Model
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