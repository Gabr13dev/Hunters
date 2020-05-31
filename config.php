<?php
session_start();
header("Content-Type: text/html; charset=utf8");
date_default_timezone_set('America/Sao_Paulo');
define('BASE_URL', 'http://localhost/Hunters');
define('SERVIDOR', 'mysql:host=localhost;dbname=hunters_2020;charset=utf8');
define('USUARIO', 'root');
define('SENHA', '');

define('baseTitle', "eSports Hunters");
define('pasta', "Hunters");
define('protocol', "http://");

include('controller/Controller.class.php');
include('model/Model.class.php');
include('lib/Website.class.php');

$Website = new Website();

