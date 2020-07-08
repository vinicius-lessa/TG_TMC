<?php
/* 
4 SEMESTRE - SISTEMAS PARA INTERNET
Author: Vinícius Lessa da Silva / Anderson Nascimento
Since: 2020/06/19
*/

/* função para criar os itens na variavel Session */
function addItemCarrinho($codProduto, $qtdProduto, $valorUn)
{
    $Data = new DateTime();
    $carrinho= $Data->format('dmy') . rand(1, 99999) ;
    
    session_start();
    if (!isset($_SESSION['cod_carrinho'])) {
        $_SESSION['cod_carrinho'] = ($_SESSION['cod_cliente'])? "0-". $carrinho : $_SESSION['cod_cliente']."-".  $carrinho;
    };

    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'][] = array( 'cod_produto' => $codProduto, 'quantidade' => $qtdProduto);
        return true;
    } else {
        foreach ($_SESSION['carrinho'] as $key => $value) {
            if ($value['cod_produto'] == $codProduto) {
                $_SESSION['carrinho'][$key]['quantidade'] = $value['quantidade'] + $qtdProduto;
                return true;
            }
        }
        $_SESSION['carrinho'][] = array( 'cod_produto' => $codProduto, 'quantidade' => $qtdProduto, 'valor_item' => $valorUn);
        return true;
    }
    return false;
}


/* Pegar as informações dos itens na base */
function listarProdutoCarrinho($produto, $conn)
{
    $sql = "SELECT p.cod_produto, p.nome_prod, p.cover_img, p.estoque, c.nome_categoria, p.valor_un
  FROM produto p  INNER JOIN categoria c ON p.cod_categoria = c.cod_categoria
  WHERE p.cod_produto =  ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $produto);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $stmt->close();
    return $result;
}


/* Finalizar o pedido do cliente e inserir os dados no banco  */
function finalizarPedido($carrinho, $valorTotal, $conn)
{
    $DtAtual = new DateTime();
    $DtEntrega = clone $DtAtual;
    $DtEntrega->modify('+15 day');
  
    if (isset($_SESSION['cod_cliente'])) {
        $cod_cliente = $_SESSION['cod_cliente'];
        $valor_pedido = $valorTotal;
        $cod_carrinho = $carrinho;

        $cod_pedido = criarPedido($cod_cliente, $valor_pedido, $cod_carrinho, $conn);

        if ($cod_pedido) {    
            
            //var_dump($_SESSION['carrinho']);

            foreach ($_SESSION['carrinho'] as $key => $cart) {
                $pedItem[] = criarPedidoitens($cod_pedido['cod_pedido'], $cart['cod_produto'], $cart['quantidade'], $cart['valor_item'], $conn);
                ajustarSaldoEstoque($cart['cod_produto'], $cart['quantidade'], $conn);
            }
            if (count($_SESSION['carrinho']) > count($pedItem)) {
                echo "ERRO: Ocorreu algum erro para integrar um item";
            } else {
                return true;
            }
        }
    } else {
        return false;
    }
}


/* função para criar o pedido no banco */
function criarPedido($cod_cliente, $valor_pedido, $cod_carrinho, $conn)
{
    $sql = "INSERT INTO pedido (cod_cliente, valor_pedido, cod_carrinho) VALUES(?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iis", $cod_cliente, $valor_pedido, $cod_carrinho);
    $stmt->execute();

    if ($stmt->affected_rows) {
        $sql = "SELECT cod_pedido FROM pedido WHERE cod_carrinho = ? AND cod_cliente = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $cod_carrinho, $cod_cliente);
        $result = $stmt->execute() ? $stmt->get_result()->fetch_assoc() : false;
        $stmt->close();
        return $result;
    } else {
        $stmt->close();
        return false;
    }
}



/* função para criar os itens do pedido no banco */
function criarPedidoitens($cod_pedido, $cod_produto, $quantidade, $valorItem, $conn)
{
    // S TO I
    $valorItem = intval($valorItem);

    $sql = "INSERT INTO pedido_item (cod_pedido, cod_produto, valor_item, quantidade) VALUES(?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiii", $cod_pedido, $cod_produto, $valorItem, $quantidade);
    $result = $stmt->execute() ? true : false;
    
    // var_dump($result);
    
    $stmt->close();

    return $result;
}


/* Função para listar as informações do pedido aberto */
function listarPedidoAberto($cod_carrinho, $cod_cliente, $conn)
{
    $sql = "SELECT p.cod_pedido, p.valor_pedido ,c.nome_cliente FROM pedido p 
    INNER JOIN  cliente c ON p.cod_cliente = c.cod_cliente  WHERE p.cod_carrinho = ? AND p.cod_cliente = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $cod_carrinho, $cod_cliente);
    $result = $stmt->execute() ? $stmt->get_result()->fetch_assoc() : false;
    $stmt->close();

    return $result;
}


/* Função para ajustar o saldo de estoque */
function ajustarSaldoEstoque($cod_produto, $quantidade, $conn)
{
    $sqlSET = "SET @qdtEstoque := (SELECT estoque FROM produto WHERE cod_produto = ? )";
    $stmt = $conn->prepare($sqlSET);
    $stmt->bind_param("i", $cod_produto);
    $stmt->execute();

    $sql = " UPDATE produto SET estoque = (@qdtEstoque - ?) WHERE cod_produto = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $quantidade, $cod_produto);

    $result = $stmt->execute() ? true : false;

    $stmt->close();

    return $result;
}

/* função para listar os pedidos do cliente*/
function listarTodosPedidosCliente($conn, $cod_cliente)
{
  $sql = "SELECT cod_pedido , cod_cliente, valor_pedido FROM pedido  WHERE  cod_cliente = ? ";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $cod_cliente);
  $stmt->execute();

  $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  $stmt->close();

  return $result;
}


/* função para listar os itens do pedido */
function listarTodosItensDoPedidos($conn, $ccod_pedido)
{
  $sql = "SELECT pdi.cod_pedido, pdi.cod_produto, pdi.valor_item, pdi.quantidade,p.cover_img, p.nome_prod,c.nome_categoria FROM pedido_item pdi 
            INNER JOIN produto p ON pdi.cod_produto = p.cod_produto INNER JOIN categoria c ON p.cod_categoria = c.cod_categoria
            WHERE pdi.cod_pedido = ? ";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $ccod_pedido);
  $stmt->execute();

  $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  $stmt->close();
  return $result;
}