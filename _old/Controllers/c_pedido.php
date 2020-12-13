<?php
/*REMOVER WARNING**/
if (!defined('SITE_URL')) {
  include_once '../config.php';
}

$conn = require SITE_PATH . '/Models/conexao.php';

/**FUNÇÕES DOS PRODUTOS*/
include SITE_PATH . '/Models/m_pedido.php';

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

//ADICIONAR ITEM NO CARRINHO
if (isset($_GET['addProduto']) && isset($_GET['valor'])){
  $codProduto = $_GET['addProduto'] ;
  $valorUn    = $_GET['valor']      ;
  $qtdProduto = 1                   ;

  if (addItemCarrinho($codProduto, $qtdProduto, $valorUn)) {
    header("location:" . SITE_URL . "/Views/pedidos/carrinho.php");
  }
  exit;
}

//LISTAR ITENS NO CARRINHO
if (isset($itensCarrinho) && isset($_SESSION['carrinho'])) {
  foreach ($_SESSION['carrinho'] as $key => $itvalue) {
    $itensCarrinho[] = listarProdutoCarrinho($itvalue['cod_produto'], $conn) + ['quantidade' => $itvalue['quantidade']];
  }
}

//REMOVER ITENS NO CARRINHO
if (isset($_GET['remItem'])) {
  foreach ($_SESSION['carrinho'] as $key => $itvalue) {
    if ($itvalue['cod_produto'] == $_GET['remItem']) {
      unset($_SESSION['carrinho'][$key]);
      header("location:" . SITE_URL . "/Views/pedidos/carrinho.php");
      exit;
    }
  }
}

/*LISTAR OS PRODUTOS NA PÁGINA MEUS PRODUTOS*/
if (isset($listaMeuspedidos)) {
  $listaMeuspedidos = listarTodosPedidosCliente($conn, $cod_cliente);
  if ($listaMeuspedidos) {
    foreach ($listaMeuspedidos as $key => $pedido) {
      if ($pedido['cod_pedido']) {
        $ListaItensMeusPedidos[$pedido['cod_pedido']] = listarTodosItensDoPedidos($conn, $pedido['cod_pedido']);
      }
    }
  }
}

/**Finalizar o pedido de compra - FAZER */
if (isset($_GET['finalizar'])) {
  if (isset($_SESSION['cod_cliente'])) {
    if (finalizarPedido($_GET['finalizar'], $_GET['total'], $conn)) {
      header("location:" . SITE_URL . "/Views/pedidos/pedidoFinalizado.php");
      exit;
    } else {
      echo "ERRO: Ocorreu um erro para finalizar o Pedido";
    }
  } else {
    header("location:" . SITE_URL . "/Views/Clientes/loginCliente.php");
    exit;
  }
}

/**Finalizar o pedido de compra - FAZER */
if (isset($PedidoCriado)) {
  $PedidoCriado = listarPedidoAberto($_SESSION['cod_carrinho'], $_SESSION['cod_cliente'], $conn);
  unset($_SESSION['carrinho']);
  unset($_SESSION['cod_carrinho']);
}