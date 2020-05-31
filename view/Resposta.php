    <div class="main-panel" id="main-panel">
      <div class="content">
          <div class="col-md-12">
            <Br><Br><Br>
            <br><br><br>
          <center>
           <?php 
            $wb = new WebSite();

              $unificado = $wb->getParameter(5) ? $wb->getParameter(5) : 'a';

            if($wb->getParameter(2) == 'success'){
           ?>
            <h1> <font color="#8bff00">Sucesso <i class="fa fa-check-circle"></i></font></h1>
            <h2 class="fontRes"><?=urldecode(ucfirst($wb->getParameter(4)))?> <?=urldecode($wb->getParameter(3))?> com sucesso.</h2>
              <br>
            <h3><a class="btn btn-outline-success btn-pill" href="<?=BASE_URL?>">Voltar para o inicio</a></h3>
          <?php } 
            if($wb->getParameter(2) == 'fail'){
          ?>
          <h1> <font color="#c71a1a">Algo deu errado <i class="fa fa-times-circle"></i></font></h1>
            <h2><font color="#fff">Não foi possivel <?=urldecode($wb->getParameter(3))?> <?=$unificado?> <?=urldecode($wb->getParameter(4))?></font></h2>
              <br>
            <h3><a class="btn btn-outline-success btn-pill" href="<?=BASE_URL?>">Voltar para o inicio</a></h3>
          <?php } ?>
          </center>
          </div>
      </div>
      <br><br>
      <br><br>
      <br><br>