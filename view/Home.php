<link href="css/signin.css" rel="stylesheet">
<body class="text-center">
	
    <div class="form-signin">
  <img class="mb-4" src="<?=BASE_URL?>/img/Logo_eSports_Hunters.png" alt="" width="100%"  id="img_login1">
  <div id="msgErrro_empty" class="error">Campos insuficientes</div>
  <div id="msgErrro_fail" class="error">Usuario ou senha incorreto</div>
  <label for="Eml_Logon" class="sr-only">Email</label>
  <input type="email" id="Eml_Logon" name="Eml_Logon" class="form-control" placeholder="Email" autocomplete="off" required>
  <label for="Pass_Logon" class="sr-only">Senha</label>
  <input type="password" id="Pass_Logon" name="Pass_Logon" class="form-control" placeholder="Senha" autocomplete="off" required>
  <div class="checkbox mb-3">
    <label>
      <a href="<?=BASE_URL?>/Recuperar">Esqueci a senha</a>
    </label>
  </div>
  <button class="btn btn-lg btn-success btn-block btn-login" type="default" id="Entrar_btn_Logon">Entrar <i class="fa fa-sign-in"></i></button>

</div>

<div id="cadastro" target="_blank" class="download">
                Cadastrar-se  <i class="fa fa-user-plus fixLeft"></i>
</div>
