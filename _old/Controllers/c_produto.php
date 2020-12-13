<?php

if (!defined('SITE_URL')) {
  include_once '../config.php';
}

$conn = require SITE_PATH . '/Models/conexao.php';

/*FUNÇÕES PRODUTOS*/
include SITE_PATH . '/Models/m_produto.php';
include SITE_PATH . '/Models/m_comentario.php';


/*Verificar se foi selecionado o produto para mostrar*/
if (isset($DetalheProduto)) {
    if ($DetalheProduto) {
        $infoProduto = listarProduto($DetalheProduto, $conn);
        $Comentarios = carregarComentarios($conn, $DetalheProduto);
        $notaMedia = calculaNotaMedia($Comentarios);
    } else {
        header("location:" . SITE_URL . "/Views/home/index.php");
    }
}

/*verificar se esta na pagina todos e se teve pesquisa*/
if (isset($produtoPesquisa)) {
    $listaTodosProdutos = pesquisarProduto($conn, $produtoPesquisa);
} elseif (isset($listaTodosProdutos)) {
    $listaTodosProdutos = carregarProdutos($conn, $limit, $offset);
}

/*Listar os violoes*/
if (isset($listaVioloes)) {
    $listaVioloes = carregarProdutosCategoria($conn, $codCategoria, $limit, $offset);
}

/*Listar as guitarras*/
if (isset($listaGuitarras)) {
  $listaGuitarras = carregarProdutosCategoria($conn, $codCategoria, $limit, $offset);
}

/*Listar as baterias*/
if (isset($listaBaterias)) {
    $listaBaterias = carregarProdutosCategoria($conn, $codCategoria, $limit, $offset);
}

if (isset($itensProdHome)) {
  $itensProdHome = carregarprodutos($conn);
}

/* ================================================================================ */

/*  CADASTRAR CATEGORIA DO PRODUTO */
if (isset($_POST['cadastrar-categoria'])) {
  $dados = [];
  foreach ($_POST as $key => $value) {
    if ($key != "cadastrar-categoria") {
      $dados[$key] = ($value);
    }
  }

  if (cadastrarcategoria($dados, $conn)) {
    header("location:" . SITE_URL . "/Views/produtos/categ-index.php");
  } else {
    echo 'Erro para cadastrar dado no Banco';
  }
  exit;
}

/* ALTERAR CATEGORIA NO BANCO */
if (isset($_POST['alterar-categoria'])) {
    $dados = [];
    foreach ($_POST as $key => $value) {
        if ($key != "alterar-categoria") {
            $dados[$key] = ($value);
        }
    }
    if (alterarcategoria($dados, $conn)) {
        header("location:" . SITE_URL . "/Views/produtos/categ-index.php");
    } else {
        echo 'Erro ao alterar o cadastro no banco';
    }
    exit;
}

/* FUNÇÃO LISTAR CATEGORIA NA INDEX */
if (isset($categorias)) {
  $categorias = listarcategoria($conn);
}

/* FUNÇÃO PARA LISTAR AS CATEGORIAS NA PAGINA DE CADASTRO DE PRODUTOS */
if (isset($selectcategoria)) {
  $selectcategoria = selectcategoria($conn);
}

/* DELETAR PRODUTOS NO BANCO */

if (isset($_POST['deletar-produto'])) {

  if (isset($_GET['produto'])) {
    $cod_produto = $_GET['produto'];
    $selectproduto = selectalterarproduto($conn, $cod_produto);

    if ($selectproduto > 0 && deletarproduto($conn, $cod_produto)) {
      header("location:" . SITE_URL . "/Views/produtos/prod-index.php");
    } else {
      echo 'Erro ao Deletar o cadastro no banco';
    }
    exit;
    
  } else {
    header("location:" . SITE_URL . "/Views/produtos/prod-index.php");
  }
}

/*  CADASTRAR OS PRODUTOS NO BANCO */
if (isset($_POST['cadastrar-produto'])) {
  $dados = [];
  foreach ($_POST as $key => $value) {
    if ($key != "cadastrar-produto") {
      $dados[$key] = ($value);
    }
  }

  $nomecover = publicarImagem($_FILES['cover_img']);
  $nomebanner = publicarImagem($_FILES['banner_img']);

  $dados['cover_img'] = $nomecover;
  $dados['banner_img'] = $nomebanner;

    if (cadastarproduto($dados, $conn)) {
        header("location:" . SITE_URL . "/Views/produtos/cadastrado-sucesso.php");
    } else {
        echo 'Erro para cadastrar dado no Banco';
    }
    exit;
}

/* ALTERAR PRODUTO NO BANCO  */
if (isset($_GET['produto'])) {
  $cod_produto = $_GET['produto'];
  $selectproduto = selectalterarproduto($conn, $cod_produto);
}
if (isset($_POST['alterar-produto'])) {
  $dados = [];
  foreach ($_POST as $key => $value) {
    if ($key != "alterar-produto") {
      $dados[$key] = ($value);
    }
  }

  $alternomecover = alterImagem($_FILES['cover_img']);
  $alternomebanner = alterImagem($_FILES['banner_img']);

  $dados['cover_img'] =  $alternomecover;
  $dados['banner_img'] = $alternomebanner;

  if (alterarproduto($conn, $dados)) {
    header("location:" . SITE_URL . "/Views/produtos/prod-index.php");
  } else {
    echo 'Erro ao alterar o cadastro no banco';
  }
  exit;
}