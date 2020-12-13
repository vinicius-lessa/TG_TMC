<?php
/* 
4 SEMESTRE - SISTEMAS PARA INTERNET
Author: Vinícius Lessa da Silva / Anderson Nascimento
Since: 2020/06/19
*/

/* FUNÇÃO PARA VALIDAR O CLIENTE NO BANCO */
function validarUsuario($user, $pass, $conn)
{
    $sql = 'SELECT cod_cliente, nome_cliente, telefone, cpf, email, senha, cep  from cliente where email = ? ';
    $stmt = $conn->prepare($sql) ;
    $stmt->bind_param("s", $user);
    $stmt->execute();

    $result = $stmt->get_result()->fetch_assoc();

    $stmt->close();

    return password_verify($pass, $result['senha']) ?  $result : false;
}

/* FUNÇÃO PARA LISTAR CLIENTES */
function listarClientes($conn)
{
  $sql = 'SELECT cod_cliente, nome_cliente, email FROM cliente';
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  $stmt->close();
  return $result;
  // print_r($result);
}

/* FUNÇÃO PARA CADASTRAR O CLIENTE NO BANCO */
function cadastrarUsuario($dados, $conn)
{
    $valores = $dados;

    $sqlValida = 'SELECT email from cliente where email = ? ';
    $stmt = $conn->prepare($sqlValida) ;
    $stmt->bind_param("s", $valores['email']);
    $stmt->execute();

    $resultValida = $stmt->get_result()->num_rows;

    $stmt->close();
   
    if (!$resultValida) {
        $sql = 'INSERT INTO cliente (nome_cliente, telefone, cpf, email, senha) values(?,?,?,?,?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $valores['nome_usuario'], $valores['telefone'], $valores['cpf'], $valores['email'], $valores['senha']);
        $result = $stmt->execute() ? true : false;
        $stmt->close();

        return $result;
    } else {
        echo "Usuario ja existe!";
    }
}