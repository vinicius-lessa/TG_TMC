<?php
if(!defined('SITE_URL')){
  include_once '../config.php';
}
$conn = require SITE_PATH . '/Models/conexao.php';


include SITE_PATH . '/Models/m_alterarCliente.php';

// $clientes = carregarClientes($_SESSION['cod_cliente'], $conn);

/*VALIDAÇÃO PARA ALTERAR CLIENTES CADASTRADOS */
if (isset($codCliente)) {
    // $dadosCliente = consultarCliente($_SESSION['cod_cliente'], $conn);
    $dadosCliente = consultarCliente($codCliente, $conn);
}

if (isset($_POST['alterar'])) {

    $dados=['cod_cliente' => $_GET['cod_cliente']];

    foreach ($_POST as $key => $value) {
        if ($key != "alterar") {
            $dados[$key] = ($value);
        }
    }

//  var_dump($dados);

    if (alterarCliente($dados, $conn)) {
        /*
        Var_Dump($_GET);
        echo "<br><br>";        
        Var_Dump($_POST);
        echo "<br><br>";
        Var_Dump($_SESSION);
        */
        if($_POST['adm'] = 'true'){
            header("location:". SITE_URL . "/Views/adm/adm-alterarCliente.php");
        } else {
            session_start();
            $_SESSION['nome_cliente'] = $dados['nome_cliente'];
            header("location:". SITE_URL . "/Views/Clientes/alterado.php");
        }
    } else {
        echo 'Erro para Alterar cliente no Banco';
    }
    exit;
}


/**VALIDAÇÃO PARAR EXCLUIR CLIENTES CADASTRADOS*/
if (isset($_POST['excluir'])){
    if ($_POST['adm'] == "true") {
        if(excluirCliente($_GET['cod_cliente'], $conn)){
            header("location:". SITE_URL . "/Views/adm/adm-alterarCliente.php");
        } else {
            Echo "Houve um erro na deleção do Cliente, Acione o Suporte!";
        }
    } else {
        if(excluirCliente($_SESSION['cod_cliente'], $conn)){
            session_start();
            session_destroy();
            header("location:". SITE_URL . "/Views/Clientes/excluido.php");
        }
    }
}

$conn->close();