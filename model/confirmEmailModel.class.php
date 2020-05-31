<?php

/**
 * @author Gabriel de Almeida
 */
class confirmEmailModel extends Model
{
	private $Model;
	
	function __construct()
	{
		$this->Model = new Model();
	}

	function setActivationEmail(){
		$sql = 'SELECT * FROM local;';
		return $this->Model->getData($sql);
	}

}