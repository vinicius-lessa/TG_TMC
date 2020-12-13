<?php
/* 
4 SEMESTRE - SISTEMAS PARA INTERNET
Author: Vinícius Lessa da Silva / Anderson Nascimento
Since: 2020/06/19
*/
function validarUsuario($user, $pass, $conn)
{
  $sql = 'SELECT cod_usuario, nome_usuario, log, senha  from usuario where log = ? ';
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $user);
  $stmt->execute();

  $result = $stmt->get_result()->fetch_assoc();
  $stmt->close();
  return password_verify($pass, $result['senha']) ?  $result : false;
}

function cadastrarUsuario($dados, $conn)
{
  $valores = $dados;
  $sqlValida = 'SELECT log from usuario where log = ? ';
  $stmt = $conn->prepare($sqlValida);
  $stmt->bind_param("s", $valores['log']);
  $stmt->execute();

  $resultValida = $stmt->get_result()->num_rows;
  $stmt->close();

  if (!$resultValida) {
    $sql = 'INSERT INTO usuario (nome_usuario, telefone, cpf, email, log, senha) values(?,?,?,?,?,?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $valores['nome_usuario'], $valores['telefone'], $valores['cpf'], $valores['email'], $valores['log'], $valores['senha']);

    $result = $stmt->execute() ? true : false;
    $stmt->close();

    return $result;
  } else {
    echo "Usuario ja existe ...";
  }
}

/* FUNÇÃO PARA LISTAR USUÁRIOS */
function listarusuarios($conn)
{
  $sql = 'SELECT cod_usuario, nome_usuario, log FROM usuario';
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  $stmt->close();
  return $result;
  // print_r($result);
}

/* ALTERAR USUARIO NO BANCO */
function alterarusuario($dados, $conn)
{
  print_r($dados);
  $sql = 'UPDATE usuario SET log = ?, senha = ?  WHERE cod_usuario = ?';
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssi", $dados['log'], $dados['senha'], $dados['cod_usuario']);
  $result = $stmt->execute() ? true : false;
  $stmt->close();
  return $result;
}

function deletarusuario($conn, $id_usuario)
{
  $sql = 'DELETE FROM usuario WHERE cod_usuario = ?';
  $stmt = $conn->prepare($sql);

  $stmt->bind_param("i", $id_usuario);

  $result = $stmt->execute() ? true : false;
  $stmt->close();

  return $result;
}
