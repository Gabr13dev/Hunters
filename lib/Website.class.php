<?php

class Website
{
    function __construct(){

    }

    public function run(){
        $rotas = $this->getRotas();
        $this->isAction($rotas[1]);
		$arquivo = $rotas[1].".php";
	  if(file_exists("view/".$arquivo)){
	  		include_once "controller/".$rotas[1]."Ctl.class.php";
	  		include_once "model/".$rotas[1]."Model.class.php";
	  		include_once 'inc/Head.php';
	  		$the_page = $arquivo;
 		}else{
             $the_page = '404.php';
         }
		 $this->render($the_page); 
    }

    private function getRotas(){
        $url = ltrim(parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/' );
        $rota = explode( '/' , $url );
        empty($rota[1]) ? $rota[1] = 'Home' : '';
        return $rota;
    }

    private function isAction($route){
        if($route == 'Action'){
            include_once "lib/Action.class.php";
            $Action = new Action();
            $Action->exec();
            die();
        }
    }

    private function render($site){
        $this->loggedIn();
        $Controll = new Controller();
        if($site != "404.php"){
            $nameSite = $this->getRotas()[1].'Ctl';
            $objSite = new $nameSite;
            $dataSite = extract($objSite->main());
        }
        include_once "inc/depedences.php";
        include_once "inc/padrao.php";
        echo '<title>'.Structure::getNamepage($site).'</title>';
        !$this->isHome() ? include_once "inc/menu.php" : '';
        include_once "view/".$site;
        //!$this->isHome() ? include_once "inc/footer.php" : '';
        include_once "inc/depedencesjs.php";
    }

    private function loggedIn(){
        if(!$this->isHome()){
            $userBool = isset($_SESSION['nome']);
            $levelBool = isset($_SESSION['nick']);
                if(!$userBool && !$levelBool){
                    echo '<script> window.location.replace("'.BASE_URL.'"); </script>';
                    die("Redirect to Login");
                }
                if($_SESSION['ativo'] == 1){
                    echo '<script> window.location.replace("'.BASE_URL.'/confirmEmail"); </script>';
                }
            }
    }

    public function callBackLogged(){
        $this->loggedIn();
    }

    public function isHome(){
        $notProtected_Pages = ['Home','Recuperar','Cadastro','Action','Resposta','confirmEmail'];
        $key = array_search($this->getRotas()[1], $notProtected_Pages);
        return is_integer($key) ? true : false;    
    }

    public function getParameter($i){
        $rotas = $this->getRotas();
            if(count($rotas) > $i){
                return $rotas[$i];
            }else{
                return false;
            }
    }
}
