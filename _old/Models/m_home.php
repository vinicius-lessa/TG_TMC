<?php
/* 
4 SEMESTRE - SISTEMAS PARA INTERNET
Author: Vinícius Lessa da Silva / Anderson Nascimento
Since: 2020/06/19
*/

/* FUNÇÃO PARA CARREGAR OS ITENS DO CARROSEL */
function carregarDestaques($conn)
{
    $sql = "SELECT cod_produto, nome_prod, descricao_prod, cover_img, banner_img FROM produto  WHERE destaque = 1 ORDER BY rand() LIMIT 8";
    $stmt = $conn->prepare($sql) ;
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $result;
}

/* FUNÇÃO PARA CARREGAR OS ITENS DE SUGESTÃO DA HOME */
function carregarSugestoes($conn)
{
    $sql = "SELECT  p.cod_produto, p.valor_un, p.nome_prod, p.descricao_prod, p.cover_img, p.valor_un, c.nome_categoria
      FROM produto p INNER JOIN categoria c ON p.cod_categoria = c.cod_categoria
      WHERE p.estoque > 0 ORDER BY rand() LIMIT 8 ";

    $stmt = $conn->prepare($sql) ;
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $result;
}