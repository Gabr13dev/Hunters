<?php

/**
 * @author Gabriel de Almeida
 */
class HomeModel extends Model
{
	private $Model;
	
	function __construct()
	{
		$this->Model = new Model();
	}

	function getUsuario(){
		$sql = 'SELECT * FROM usuarios;';
		return $this->Model->getData($sql);
	}

}