<?php

/**
 * @author Gabriel de Almeida
 */
class PainelModel extends Model
{
	private $Model;
	
	function __construct()
	{
		$this->Model = new Model();
	}

	function getOrgs(){
		$sql = 'SELECT * FROM `organizacao` ;';
		return $this->Model->getData($sql);
	}

}