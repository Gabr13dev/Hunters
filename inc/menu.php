<?php
echo '<div class="col-md-2 side-bar-ms text-center">
          	<div class="container">
          		<div class="nav-bar-top">
          			<div id="avatar" class="circle-avatar-cover img-back">'.$Controll->getFirstLetter($_SESSION['nome']).'</div>
          			<span>'.$_SESSION['nome'].'</span>
          		</div>
          		<div class="nav-bar-body" id="ul-menu">
          			<a href="'.BASE_URL.'/Painel"><li class="nav-bar-option" id="painel">Painel	<i class="fa fa-tachometer icon-nav-option"></i></li></a>
          			<a href="'.BASE_URL.'/Perfil"><li class="nav-bar-option" id="perfil">Perfil	<i class="fa fa-user icon-nav-option"></i></li></a>
          			<a href="'.BASE_URL.'/Campeonatos"><li class="nav-bar-option" id="camp">Campeonatos	<i class="fa fa-trophy icon-nav-option"></i></li></a>
          			<a href="'.BASE_URL.'/Organizacao"><li class="nav-bar-option" id="org">Time	<i class="fa fa-shield icon-nav-option"></i></li></a>
          			<a href="'.BASE_URL.'/Explorar"><li class="nav-bar-option" id="exp">Explorar	<i class="fa fa-binoculars icon-nav-option"></i></li></a>
          			<a href="'.BASE_URL.'/Action/logoff" id="sair"><li class="nav-bar-option">Sair		<i class="fa fa-sign-out icon-nav-option"></i></li></a>
          		</div>
          	</div>
        </div>';

?>