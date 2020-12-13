<?php
  /* 
  4 SEMESTRE - SISTEMAS PARA INTERNET
  Author: Vinícius Lessa da Silva / Anderson Nascimento
  Since: 2020/06/19
  */
  if (!defined('SITE_URL')) {
    include_once '../../config.php';
  }

  $titlePage = "Alterar Usuário";

  

  $login      = $_GET['log'];
  $id_usuario = $_GET['usuario'];
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

    <title><?php echo $titlePage; ?></title>
  </head>

  <body>
    <?php require SITE_PATH . '/includes/menu-adm.php'; ?>
    <div class="container col-8 mt-5 pt-3 pb-5 ">
      <div class="row justify-content-md-center text-center ">
        <h1>Deletar Usuario: <?php echo $login; ?></h1>
      </div>
      <div class="row justify-content-md-center mt-3">
        <div class="col-md-6 d-flex justify-content-center">
          <form action='<?php echo SITE_URL ?>/Controllers/c_usuario.php?usuario=<?php echo $id_usuario; ?>&log=<?php echo $login; ?>' method="post">
            <div class="input-group d-flex justify-content-center m-4">
              <h5>Deseja realmente este usuário ?</h5>  
            </div> 
            <div class="d-flex justify-content-center">
              <input  class="btn btn-dark btn-adm mx-2 col-3 text-light" type="submit" value="Deletar" name="deletar-usuario" id="deletar-usuario">
              <a      class="btn btn-dark btn-block btn-adm mx-2 col-3 text-light" href="./index.php">Cancelar</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer>
        <div style="margin-top: 80px;">
          <?php require SITE_PATH . '/includes/footer-adm.php'; ?>
        <div>
      </footer>
  </body>
</html>