<?php

class Action {

	private $local;
	private $urlLocalGet;
	private $Web;
	private $Mod;
	
	function __construct()
	{
		$this->local = $_POST;
		$this->urlLocalGet = $_GET;
		$this->Web = new Website();
		$this->Mod = new Model();
	}

	public function exec(){
		$acao = $this->Web->getParameter(2);
		switch ($acao) {
			case 'auth':
				$this->login();
				break;
			case 'logoff':
				$this->logoff();
				break;
			case 'new':
				$this->cadastro();
				break;
			case 'confirm':
				$this->verifyCodeConfirm();
				break;
			case 'emailExists':
				$this->emailExists();
				break;
			default:
				$this->toScreen('fail','realizar','ação');
				break;
		}
	}

	private function login(){
		if(empty($this->urlLocalGet['email']) || empty($this->urlLocalGet['senha'])){
			echo 'NULL';
			return false;
		}
		$response = $this->Mod->getData('SELECT * FROM usuario,perfil WHERE usuarioId = idUsuario AND email = "'.$this->urlLocalGet['email'].'" AND senha = "'.md5($this->urlLocalGet['senha']).'";');
		if(isset($response[0]['nomeUsuario'])){
			$_SESSION['nome'] = $response[0]['nomeUsuario'];
			$_SESSION['nick'] = $response[0]['nickName'];
			$_SESSION['email'] = $response[0]['email'];
			$_SESSION['ativo'] = $response[0]['ativo'];
			echo 'true';
			return true;
		}else{
			echo 'false';
			return false;
		}	 
	}

	private function emailExists(){
		if(!empty($this->urlLocalGet)){
			$response = $this->Mod->verifyData('SELECT * FROM `usuario` WHERE email = "'.$this->urlLocalGet['email'].'" ;');
			if($response == true){
				echo 'true';
				return true;
			}else{
				echo 'false';
				return false;
			}
		}else{
			echo 'false';
			return false;
		}
	}

	private function cadastro(){
		if(!empty($this->local)){
			$response = $this->Mod->insertData('INSERT INTO `usuario`(`usuarioId`, `email`, `senha`) VALUES (NULL,"'.$this->local['Eml_Logon'].'","'.md5($this->local["Pass_Logon1"]).'");');
			$lastId = $this->Mod->getConexao()->lastInsertId();
			$response2 = $this->Mod->insertData('INSERT INTO `perfil`(`idUsuario`, `nomeUsuario`, `nickName`, `dataNascimento`, `nacionalidade`, `avatar_perfil`, `idOrganizacao`) VALUES ('.$lastId.',"'.$this->local["full_name"].'","'.$this->local["Nick_In_Game"].'","'.$this->local["Date_Nasc"].'",'.$this->local["nation"].',NULL ,NULL );');
			$this->sendCodeConfirm($this->local['Eml_Logon'],$lastId);
			if($response == true & $response2 == true){
				$this->toScreen('success','realizado','Verifique seu e-mail, cadastro');
			}else{
				$this->toScreen('fail','cadastrar','usuario','o');
			}
		}else{
			echo 'false';
			return false;
			//$this->toScreen('fail','obter os dados','usuario','do');
		}
	}

	private function sendEmail($para, $de, $de_nome, $assunto, $corpo){
		require_once("phpmailer/class.phpmailer.php");
			global $error;
			$mail = new PHPMailer();
			$mail->IsSMTP();		// Ativar SMTP
			$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
			$mail->SMTPAuth = true;		// Autenticação ativada
			$mail->SMTPSecure = 'ssl';	// ssl (deprecated - descontinuada) usar tls
			$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
			$mail->Port = 465;  		// A porta do smtp do gmail é 465 para ssl e 587 para tsl
			$mail->Username = '';
			$mail->Password = '';
			$mail->SetFrom($de, $de_nome);
			$mail->Subject = $assunto;
			$mail->CharSet  = 'utf-8';
			$mail->Body = $corpo;
			$mail->AddAddress($para);
			$mail->ContentType = 'text/html';
		if(!$mail->Send()) {
				$error = 'Mail error: '.$mail->ErrorInfo; 
				return false;
			} 
			return true;
	}

	private function verifyCodeConfirm(){
		$code = $this->urlLocalGet['code'];
		$email = $this->urlLocalGet['email'];
		$codeResponse = $this->Mod->getData("SELECT * FROM `ativacao` WHERE emailUsuario = '".$email."' AND codeGenerate = ".$code.";");
		if(count($codeResponse) > 0){
			$id = $codeResponse[0]['idAtiva'];
			$activeResponse = $this->Mod->insertData("UPDATE `usuario` SET `ativo` = '2' WHERE `usuario`.`usuarioId` = ".$id." ;");
			$deleteResponse = $this->Mod->insertData("DELETE FROM `ativacao` WHERE `ativacao`.`idAtiva` = ".$id.";");
			$_SESSION['ativo'] = 2;
			echo 'true';
			$this->Web->callBackLogged();
			return true;
		}else{
			echo 'false';
			return false;
		}
	}

	private function sendCodeConfirm($email,$id){
		$code = $this->generateCodeConfirm();
		$this->Mod->insertData("INSERT INTO `ativacao`(`idAtiva`, `emailUsuario`, `codeGenerate`) VALUES (".$id.",'".$email."',".$code.");");
		$corpo = "<!DOCTYPE html><html><head><link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'><style type='text/css'>body{postion: absolute;}.div-body{text-align: center;width:100%;height:460px;background-color: #2b2a2a;color: #28a745;padding: 18px;font-family: 'Roboto';}.warning{color: red;}.image{background-image: url('https://sistemas.jhcgadvocacia.com.br/midia/Logo_eSports_Hunters.png');background-size: 50%;background-repeat: no-repeat;margin-left: 30%;}</style></head><body><div class='div-body'><h2>Bem-vindo(a) á nossa plataforma</h2><Br><div class='image'></div><Br><P>Seu codigo de confirmação:</P><h1>".$code."</h1><br><Br><h3>Obrigado por se registrar em nossa plataforma, divirta-se.</h3><BR><p class='warning'>O codigo expira em 24 horas</p></div></body></html>";

		$boolSend = $this->sendEmail($email,'esportshunters.contato@gmail.com', 'Plataforma eSports Hunters', 'CODIGO DE CONFIRMAÇÃO' , $corpo);
		return $boolSend;
	}

	private function sendResetPassword($email,$id){
		$code = $this->randomPassword();
		$responseEmail = $this->Mod->getData("");
		if($responseEmail > 0){
		$this->Mod->insertData("");
		$corpo = "<!DOCTYPE html><html><head><link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'><style type='text/css'>.div-body{text-align: center;width:100%;height:460px;background-color: #2b2a2a;color: #28a745;padding: 18px;font-family: 'Roboto';}.warning{color: red;}.image{background-image: url('https://sistemas.jhcgadvocacia.com.br/midia/Logo_eSports_Hunters.png');background-size: 50%;background-repeat: no-repeat;margin-left: 30%;}</style></head><body><div><h2>Senha alterada</h2><Br><div class='image'></div><Br><P>Sua nova senha: </P><h1>".$code."</h1><br><Br><h3>Caso voce não tenha solicitado essas mudança entre em contato com o nosso suporte.</h3><BR></div></body></html>";

		$boolSend = $this->sendEmail($email,'esportshunters.contato@gmail.com', 'Plataforma eSports Hunters', 'RESET DE SENHA' , $corpo);
			return $boolSend;
		}else{
			return false;
		}
	}

	private function generateCodeConfirm(){
		$number_Part1 = (rand(0, 9));
		$number_Part2 = (rand(0, 9));
		$number_Part3 = (rand(0, 9));
		$number_Part4 = (rand(0, 9));
		$number_Part5 = (rand(0, 9));
		$number_Part6 = (rand(0, 9));
		$final_Number = $number_Part1.$number_Part2.$number_Part3.$number_Part4.$number_Part5.$number_Part6;
		return $final_Number;
	}

	private function randomPassword() {
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array();
		$alphaLength = strlen($alphabet) - 1;
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass);
	}


	private function logoff(){
		session_unset(); 
		session_destroy();
		clearstatcache();
		echo "<script>window.location.href = '".BASE_URL."';</script>";
	}

	private function toScreen($type,$action,$what,$uny = ''){
		if($uny != ''){
			$uny = '/'.$uny;
		}
		echo "<script>window.location.href = '".BASE_URL."/Resposta/".$type."/".$action."/".$what.$uny."';</script>";
	}
	
}
