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


$titlePage = 'ADM Tmc.com'
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

  <title><?php echo $titlePage; ?>
  </title>
</head>

<body>
  <?php require SITE_PATH . '/includes/menu-adm.php'; ?>
  <main class="min-h-50">
  <h2 class="text-center font-weight-bold mb-2 mt-3">ADMINISTRATIVO</h2> <!--MUDEI-->
    <div class="container">
      <div class="row mt-5">
        <div class="col-6 mt-5">
          <h3 class="text-center font-weight-bold mb-2">LOJA</h3> <!--MUDEI-->
          <a class="btn btn-dark btn-block btn-adm-2 font-weight-bold py-4 my-3 col align-self-center" href="<?php echo SITE_URL ?>/Views/produtos/prod-index.php"><strong class="h5">PRODUTOS</strong></a>
          <a class="btn btn-dark btn-block btn-adm-2 font-weight-bold py-4 my-3 col align-self-center" href="<?php echo SITE_URL ?>/Views/produtos/categ-index.php"><strong class="h5">CATEGORIAS</strong></a>
        </div>
          <div class="col-6 mt-5">
          <h3 class="text-center font-weight-bold mb-2">LOGINS</h3> <!--MUDEI-->
          <a class="btn btn-dark btn-block btn-adm-2 font-weight-bold py-4 my-3 col align-self-center" href="<?php echo SITE_URL ?>/Views/adm/usuarios.php"><strong class="h5">USUÁRIOS</strong></a>
          <a class="btn btn-dark btn-block btn-adm-2 font-weight-bold py-4 my-3 col align-self-center" href="<?php echo SITE_URL ?>/Views/adm/adm-alterarCliente.php"><strong class="h5">CLIENTES</strong></a>
        </div>
      </div>
    </div>
  </main>
  <?php require SITE_PATH . '/includes/footer-adm.php'; ?>
</body>

</html>