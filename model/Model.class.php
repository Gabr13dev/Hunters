<?php

/**
 * @author Gabriel de Almeida
 */
class Model
{
	private $con;
	
	function __construct()
	{
		try{
			$this->con = new PDO(SERVIDOR, USUARIO, SENHA);
		}catch( PDOException $Exception ) {
			echo '<pre>';
    		$jsOut = '{ "Msg" : "'.$Exception->getMessage( ).'", "Code" : '.$Exception->getCode();
			$jsOut .= ', "Reason" : "Falha ao conectar-se ao Banco de Dados" }';
			echo $jsOut;
			echo '</pre>';
			die();
		}
	}

	public function getConexao(){
		return $this->con;
	}


	public function getData($sql){
	  $sql = $this->con->prepare($sql);
      $sql->execute();
      $r = $sql->fetchAll();
      return $r;
	}

	public function insertData($sql){
	  $sql = $this->con->prepare($sql);
      if($sql->execute()){
      	return true;
      }else{
      	return false;
      }
	}

	public function verifyData($sql){
		$sql = $this->con->prepare($sql);
		$sql->execute();
		$r = $sql->fetchAll();
		$arrayLenght = count($r);
		if($arrayLenght > 0){
			return true;
		}else{
			return false;
		}
	}

}