<?php
/* 
4 SEMESTRE - SISTEMAS PARA INTERNET
Author: Vinícius Lessa da Silva / Anderson Nascimento
Since: 2020/06/19
*/
$conf=[
  'host' => 'localhost',
  'user' => 'root',
  'pass' => '',
  'data' => 'tmc_com'];

  
$conn = new mysqli($conf['host'], $conf['user'], $conf['pass'], $conf['data']);
$conn->set_charset('utf8');

if ($conn->connect_error) {
    die('Conexão Falhou: '.$conn->connect_error);
}

return $conn;