<?php

    include __DIR__ . '/../Model/Model.php';

class Controller {
	
    public function login() {
		
		/* Pega o usuário e senha preenchidos no formulário de login da View */
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		
		/* Encaminha os dados a Model para que seja realizado a validação */
		$model = new Model();
		$validacao = $model->validaDados($usuario,$senha);
		
		/* Pega o resultado da validação realizada no Model e o encaminha para ser exibido pela View */
		$view = new View();
		$view->login($validacao); 
       
    }
}

?>