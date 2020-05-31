<link href="css/signin.css" rel="stylesheet">
  <body class="text-center">
    <div class="form-signin">
  <img class="mb-4" src="<?=BASE_URL?>/img/undraw_authentication_fsn5.svg" alt="" width="272" height="272" id="img_security">
  <label for="inputEmail" class="sr-only">Email</label>
  <div id="Error_reset" class="error">Email invalido ou não cadastrado</div>
  <input type="email" id="inputEmailMeister" class="form-control" placeholder="Email" autocomplete="off" required>
  <div class="checkbox mb-3 d-15">
    <label>
      <a href="<?=BASE_URL?>">Eu sei minha senha</a>
    </label>
  </div>
  <button class="btn btn-lg btn-success btn-block btn-login" type="submit" id="Reset_pass">Resetar senha <i class="fa fa-envelope"></i></button>
</div>
</body>