<?php 

// Requerimento para funcionamento
require './vendor/autoload.php';
require_once './config_serv.php';

// Variável para receber uma página, caso não receba, apresenta a tela home
$pagina = isset($_GET['pg']) ? $_GET['pg'] : 'home';

include_once './View/template/cabecario.php';

switch ($pagina) {
    case 'home':
        include_once './View/home/index.php';
        break;
    case 'map':
        include_once './View/map/index.php';
        break;
    case 'bestiario':
        include_once './View/bestiario/index.php';
        break;
    case 'cadastro-tarefa':
        include_once './View/cadastro/tarefa/index.php';
        break;
    default:
        include_once './View/error/404.php';
        break;
}

include_once './View/template/rodape.php';
