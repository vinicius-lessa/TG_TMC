<?php
  /* 
  4 SEMESTRE - SISTEMAS PARA INTERNET
  Author: Vinícius Lessa da Silva / Anderson Nascimento
  Since: 2020/06/19
  */

  session_start();

  if (!defined('SITE_URL')) {
    include_once '../../config.php';
  }

  $titlePage = "Deletar Produto";
  $selectcategoria = [];
  

  require SITE_PATH . '/Controllers/c_produto.php';
  $cod_produto = $_GET['produto'];
  if (isset($_GET['produto'])) {
    $selectproduto = selectalterarproduto($conn, $cod_produto);
  }
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

    <title><?php $titlePage; ?></title>
  </head>
  <?php require SITE_PATH . '/includes/menu-adm.php'; ?>

  <body>
    <div class="container mt-5">
      <div class="row justify-content-md-center text-center">
        <h1>Deletando o Produto (código): <?php echo $cod_produto; ?></h1>
      </div>
      <div class="row justify-content-md-center mt-3" style="margin-bottom: 140px;">
        <div class="col-md-6">      
          <form enctype="multipart/form-data" action='<?php echo SITE_URL ?>/Controllers/c_produto.php?produto=<?php echo $cod_produto; ?>' method="post">
            <div class="input-group d-flex justify-content-center m-4">
              <h5>Deseja realmente excluir o produto <b><?php echo $selectproduto["descricao_prod"]; ?></b> ?</h5>  
            </div> 
            <div class="input-group d-flex justify-content-center">            
              <input  class="btn btn-dark btn-adm mx-2 col-3 text-light" type="submit" value="Confirmar" name="deletar-produto" id="deletar-produto">
              <a      class="btn btn-dark btn-block btn-adm mx-2 col-3 text-light" href="./prod-index.php">Cancelar</a>
            </div>
          </form>      
        </div>
      </div>
    </div>
    <footer>
      <div>
        <?php require SITE_PATH . '/includes/footer-adm.php'; ?>
      <div>
    </footer>
  </body>
</html>