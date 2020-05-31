<link href="css/signin.css" rel="stylesheet">
  <body class="text-center">
  	<div class="container">
  	<h3 class="fontRes">Confirme seu E-mail: <font color="#28a745" id="Email_subject"><?=$_SESSION['email']?></font> e digite o codigo recebido no campo abaixo.</h3>
    <div class="form-signin">
    <div id="wrongCode" class="error">O codigo informado está incorreto</div>
  <label for="inputEmail" class="sr-only">Codigo</label>
  <input type="tel" id="Code_confirm" class="form-control" placeholder="000000" maxlength="6" autocomplete="off" required>
  <div class="checkbox mb-3 d-15">
    <label>
      <a href="<?=BASE_URL?>/Action/logoff">Sair</a>
    </label>
  </div>
  <button class="btn btn-lg btn-success btn-block btn-login" type="submit" id="Confirm_code">Confirmar  <i class="fa fa-unlock"></i></button>
</div>
</div>
</body>
