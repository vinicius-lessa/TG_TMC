<?php
    
    // phpinfo();

    require_once("../lib/raelgc/view/Template.php");
    
    use raelgc\view\Template;

    $tpl = new Template("Home.php");

    $tpl->show();
    
    include_once __DIR__ . '/../Model/Translate.php';

    /* Realiza a inclusão dos arquivos com os códigos Model, View, Controller*/
    // include __DIR__ . '/Controller/Controller.php';
    include __DIR__ . '/../View/View.php';
    //include __DIR__ . '/Model/Model.php';

    /* Valida a ação passada, verifica se ela existe e se ela e o login 
    * Se a ação for exisir e for login inicia a função login do Controller
    * Se não inicia a função login da View*/
    if(isset($_GET['acao']) && $acao == 'login'){
        $acao = $_GET['acao'];
        $controller = new Controller();
        $controller->login();
    }else{
        // $view = new View();
        // $view->login(); 
    }	
?>