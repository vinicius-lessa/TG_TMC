<?php
/* 
4 SEMESTRE - SISTEMAS PARA INTERNET
Author: Vinícius Lessa da Silva / Anderson Nascimento
Since: 2020/06/19
*/
if(!defined('SITE_URL')){
include_once '../../config.php';
}
session_start();
if(isset( $_SESSION['cod_cliente'])){
  $codCliente = $_SESSION['cod_cliente'];
}

include SITE_PATH . '/Controllers/c_alterarCliente.php';
// echo password_hash($dadosCliente['senha'], PASSWORD_DEFAULT);
// print_r($alteraCliente);
$titlePage = "Alterar Cadastro";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

  <title>
    Tcm.com | <?php echo $titlePage ;?>
  </title>
</head>

<body>
  <!-- menu do site -->
  <?php include SITE_PATH .'/includes/menu.php';?>
  <!--conteudo da pagina -->
<main>
<!--conteudo da pagina -->
  <div class="container rounded">

<form class="cadastroForm" action='<?php echo SITE_URL ?>/Controllers/c_alterarCliente.php' method="post">
<h1 class="h3 mb-3 font-weight-bold text-center mt-3">ALTERAR DADOS CADASTRADOS</h1>
  <div class="form-group inputGroup">
    <label for="nome_cliente">Nome</label>
    <input type="text" class="form-control box-search input-adm" name="nome_cliente" placeholder="NOME" value="<?php echo $dadosCliente['nome_cliente'] ?>" required>
  </div>

  <div class="form-group inputGroup">
    <label for="email_cliente">E-mail</label>
    <input type="text" class="form-control box-search input-adm" name="email" placeholder="EMAIL" value="<?php echo $dadosCliente['email'] ?>" required>
  </div>

  <div class="form-group inputGroup">
    <label for="telefone_cliente">Celular</label>
    <input type="text" class="form-control box-search input-adm" name="telefone" placeholder="TELEFONE" value="<?php echo $dadosCliente['telefone'] ?>" required>
  </div>

  <input type="hidden" name="cod_cliente" value="<?php echo $dadosCliente['cod_cliente'] ?>">
  <input class="btn btn-dark btn-r ml-5 mb-5 mr-0 ml-0" type="submit" value="ALTERAR" name="alterar" id="alterar">
  <input class="btn btn-dark btn-r ml-5 mb-5 mr-0 ml-0" type="submit" value="EXCLUIR" name="excluir" id="excluir">
</div>
</main>

  <!-- footer site -->
  <?php include SITE_PATH .'/includes/footer.php';?>
</body>

</html>