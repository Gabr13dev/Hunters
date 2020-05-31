<?php
/**
 * @author Gabriel de Almeida
 */
class Controller
{
	
	function __construct()
	{
		
	}

	public function getFirstLetter($nome){
		$arrNome = str_split($nome);
		return ucfirst($arrNome[0]);
	}
}