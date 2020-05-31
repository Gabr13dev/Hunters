<link href="css/signin.css" rel="stylesheet">
<body class="text-center">
   <div class="form-signin">
      <form action="<?=BASE_URL?>/Action/new" method="POST">
         <img class="mb-4" src="<?=BASE_URL?>/img/undraw_add_user_ipe3.svg" alt="" width="100%"  id="img_login1">
         <div id="msgErrro_empty" class="error">Campos insuficientes</div>
         <div id="errorEmail" class="error">Email já cadastrado ou invalido</div>
         <div id="Eml_Logon_div"></div>
         <label for="Eml_Logon" class="sr-only">Email</label>
         <input type="email" id="Eml_Logon" name="Eml_Logon" class="form-control cadEsp" placeholder="Email" autocomplete="off" required>
         <div class="btn btn-lg btn-success btn-block btn-plus" type="default" id="valida_btn_email"> Validar Email <i class="fa fa-check"></i></div>
          <br>
         <label id="loginLink">
                <a href="<?=BASE_URL?>/Home">Já tenho meu login</a>
               </label>
         <div id="afterEmailValid">
            <label for="full_name" class="sr-only">Nome Completo</label> 
            <input type="text" id="full_name" name="full_name" class="form-control cadEsp" placeholder="Nome Completo" autocomplete="off" required>
            <label for="Nick_In_Game" class="sr-only">Nick em jogo</label>
            <input type="text" id="Nick_In_Game" name="Nick_In_Game" class="form-control cadEsp" placeholder="Nick em jogo" autocomplete="off" required>
            <div id="Maioridade" class="error">Voce deve ser maior de 18 anos</div>
            <label for="Date_Nasc" class="sr-only">Data de Nascimento</label>
            <input type="date" id="Date_Nasc" name="Date_Nasc" class="form-control cadEsp" placeholder="Data de Nascimento" autocomplete="off" required>
            <label for="Nationality" class="sr-only">Nacionalidade</label>
            <br>
            <select clas="form-control cadEsp" name="nation" id="nation" required>
               <option value="">Escolha a nacionalidade</option>
               <?php 
                  foreach($nations as $pais){
                ?>
                    <option value="<?=$pais['paisId']?>"><?=$pais['paisNome']?></option>
               <?php
                  }
                ?>
            </select>
            <div id="samePasswords" class="error">A senhas não são iguais</div>
            <label for="Pass_Logon" class="sr-only">Senha</label>
            <input type="password" id="Pass_Logon1" name="Pass_Logon1" class="form-control cadEsp" placeholder="Senha" autocomplete="off" required>
            <div id="weakPass" class="error">A senha é fraca <a href="<?=BASE_URL?>/faq"><i class="fa fa-question"></i></a></div> 
            <label for="Pass_Logon" class="sr-only">Confirma Senha</label>
            <input type="password" id="Pass_Logon2" name="Pass_Logon2" class="form-control cadEsp" placeholder="Confirma Senha" autocomplete="off" required>
            <div class="checkbox mb-3">
            </div>
            <button class="btn btn-lg btn-success btn-block btn-plus" type="default" id="cadastro_btn_signin"> Cadastrar <i class="fa fa-sign-in"></i></button>
         </div>
      </form>
   </div>

