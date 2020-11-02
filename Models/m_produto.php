<?php
/* 
4 SEMESTRE - SISTEMAS PARA INTERNET
Author: Vinícius Lessa da Silva / Anderson Nascimento
Since: 2020/06/19
*/

/**FUNÇÃO PARA CARREGAR OS DETALHES DO PRODUTO */
function listarProduto($produto, $conn)
{
  $sql = "SELECT  p.cod_produto, p.nome_prod, p.descricao_prod, p.cover_img,p.banner_img, p.valor_un,  
  p.estoque, p.tipo_prod, p.modelo_prod, p.localizacao_prod, c.nome_categoria FROM produto p INNER JOIN categoria c ON p.cod_categoria = c.cod_categoria
  WHERE p.cod_produto = ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $produto);
  $stmt->execute();
  $result = $stmt->get_result()->fetch_assoc();
  $stmt->close();
  return $result;
}

/* FUNÇÃO PARA LISTAR TODOS OS PRODUTOS */
function carregarProdutos($conn, $limit = 12, $offset = 0)
{
  $sql = "SELECT  p.cod_produto, p.nome_prod, p.descricao_prod, p.cover_img, p.valor_un, c.nome_categoria, p.estoque
    FROM produto p  INNER JOIN categoria c ON p.cod_categoria = c.cod_categoria 
    ORDER BY p.nome_prod ASC LIMIT ? OFFSET ? ";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ii", $limit, $offset);
  $stmt->execute();

  $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  $stmt->close();
  return $result;
}

/* FUNÇÃO PARA PESQUISAR O PRODUTO DO CAMPO PESQUISA */
function pesquisarProduto($conn, $produtoPesquisa)
{
  $produtoPesquisa = "%" . $produtoPesquisa . "%";
  $sql = "SELECT  p.cod_produto, p.nome_prod, p.descricao_prod, p.cover_img, p.valor_un, c.nome_categoria
    FROM produto p INNER JOIN categoria c ON p.cod_categoria = c.cod_categoria 
    WHERE p.nome_prod LIKE ? ";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $produtoPesquisa);
  $stmt->execute();
  $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  // $result = $stmt->get_result()->fetch_assoc();
  $stmt->close();
  return $result;
}

/* ================================================================================ */

/* FUNÇÃO PARA CADASTRAR CATEGORIA DOS PRODUTOS */
function cadastrarcategoria($dados, $conn)
{
  $valores = $dados;
  $sql = 'INSERT INTO categoria (nome_categoria) VALUES(?)';
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $valores['nome_categoria']);
  // $stmt->execute();
  $result = $stmt->execute() ? true : false;
  $stmt->close();

  return $result;
}

/* ALTERAR CATEGORIA NO BANCO */
function alterarcategoria($dados, $conn)
{
  $sql = 'UPDATE categoria SET nome_categoria = ? WHERE cod_categoria = ?';
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("si", $dados['nome_categoria'], $dados['cod_categoria']);
  $result = $stmt->execute() ? true : false;
  $stmt->close();
  return $result;
}

/* FUNÇÃO PARA LISTAR CATEGORIA */
function listarcategoria($conn)
{
  $sql = 'SELECT cod_categoria, nome_categoria FROM categoria';
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  $stmt->close();
  return $result;
}

/* FUNÇÃO PARA FAZER UM SELECT E LISTAR AS CATEGORIAS */
function selectcategoria($conn)
{
  $sql = 'SELECT cod_categoria, nome_categoria FROM categoria ';
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  $stmt->close();
  return $result;
}

/* ================================================================================ */

/* FUNÇÃO PARA CADASTRAR PRODUTOS */
function cadastarproduto($dados, $conn)
{
  $valores = $dados;
  $sql = 'INSERT INTO produto (nome_prod, descricao_prod, valor_un, cover_img, banner_img, estoque, cod_categoria, destaque, tipo_prod, modelo_prod, localizacao_prod) VALUES(?,?,?,?,?,?,?,?,?,?,?)';
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssdssiiisss", $valores['nome_prod'], $valores['descricao_prod'], $valores['valor_un'], $valores['cover_img'], $valores['banner_img'], $valores['estoque'], $valores['cod_categoria'], $valores['destaque'], $valores['tipo_prod'], $valores['modelo_prod'], $valores['localizacao_prod']);
  // $stmt->execute();
  $result = $stmt->execute() ? true : false;
  $stmt->close();

  return $result;
}

/* FUNÇÃO PARA CARREGAR OS DADOS DAS IMAGENS */
function publicarImagem($arquivo)
{
  $data = new DateTime();
  $arquivotemp = $arquivo['tmp_name'];
  $nomeoriginal = $arquivo['name'];
  $nomeproduto = "imagem-" . $data->format('dmY') . $data->format('His') . rand(1, 9999) . pegarExtensão($nomeoriginal);

  if (move_uploaded_file($arquivotemp, SITE_PATH . "/images/produtos/" . $nomeproduto)) {
    return $nomeproduto;
  } else {
    return false;
  }
}

function pegarExtensão($nome)
{
  return strrchr($nome, ".");
}

/* FUNÇÃO PARA CARREGAR OS DADOS DAS IMAGENS PARA ALTERAÇÃO */
function alterImagem($arquivo)
{
  $data = new DateTime();
  $arquivotemp = $arquivo['tmp_name'];
  $nomeoriginal = $arquivo['name'];
  $nomeproduto = "imagem-" . $data->format('dmY') . $data->format('His') . rand(1, 9999) . alterpegarExtensão($nomeoriginal);

  if (move_uploaded_file($arquivotemp, SITE_PATH . "/images/produtos/" . $nomeproduto)) {
    return $nomeproduto;
  } else {
    return false;
  }
}

function alterpegarExtensão($nome)
{
  return strrchr($nome, ".");
}

/* FUNÇÃO PARA FAZER O SELECT QUE VAI CARREGAR OS DADOS "VIA $_GET" PARA ALTERAÇÃO/DELEÇÃO DO PRODUTO */
function selectalterarproduto($conn, $cod_produto)
{
  $sql = "SELECT p.nome_prod, p.descricao_prod, p.valor_un, p.cover_img, p.banner_img, p.estoque, c.cod_categoria, p.destaque, p.tipo_prod, p.modelo_prod, p.localizacao_prod
    FROM produto p INNER JOIN categoria c ON p.cod_categoria = c.cod_categoria WHERE p.cod_produto = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $cod_produto);

  $stmt->execute();

  $result = $stmt->get_result()->fetch_assoc();
  $stmt->close();
  return $result;
}

function alterarproduto($conn, $dados)
{
  $sql = 'UPDATE produto SET nome_prod = ? , descricao_prod = ?, valor_un = ?, cover_img = ?, banner_img = ?, estoque = ?, cod_categoria = ?, destaque = ?, tipo_prod = ?, modelo_prod = ?, localizacao_prod = ? WHERE cod_produto = ?';
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssdssiiiisss", $dados['nome_prod'], $dados['descricao_prod'], $dados['valor_un'], $dados['cover_img'], $dados['banner_img'], $dados['estoque'], $dados['cod_categoria'], $dados['destaque'], $dados['cod_produto'], $dados['tipo_prod'], $dados['modelo_prod'], $dados['localizacao_prod']);
  $result = $stmt->execute() ? true : false;
  $stmt->close();
  return $result;
  // print_r($result);
}

function deletarproduto($conn, $dados)
{
  // Chave Estrangeira - Comentários
  $sql = 'DELETE FROM comentario WHERE cod_produto = ?';  
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('i', $dados);

  $stmt->execute();

  // Chave Primária
  $sql2 = 'DELETE FROM produto WHERE cod_produto = ?';
  $stmt = $conn->prepare($sql2);
  $stmt->bind_param('i', $dados);

  $result = $stmt->execute() ? true : false;

  $stmt->close();

  return $result;
}

/* FUNÇÃO PARA LISTAR OS PRODUTOS DE ACORDO COM A CATEGORIA */
function carregarProdutosCategoria($conn, $codCategoria, $limit = 12, $offset = 0)
{
  $sql = "SELECT  p.cod_produto, p.nome_prod, p.descricao_prod, p.valor_un, p.cover_img, p.estoque, c.nome_categoria
    FROM produto p  INNER JOIN categoria c ON p.cod_categoria = c.cod_categoria 
    WHERE p.cod_categoria = ? ORDER BY p.nome_prod ASC  LIMIT ? OFFSET ? ";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("iii", $codCategoria, $limit, $offset);

  $stmt->execute();
  $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  $stmt->close();
  return $result;
}