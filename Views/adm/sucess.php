<?php
/* 
4 SEMESTRE - SISTEMAS PARA INTERNET
Author: Vinícius Lessa da Silva
Since: 2020/06/19
*/
if (!defined('SITE_URL')) {
  include_once '../../config.php';
}
$titlePage = 'ADM Games.com'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/styles.css">

  <title><?php echo $titlePage; ?></title>
</head>

<body>
    <!-- menu do site -->
    <?php include SITE_PATH.'/includes/menu.php'; ?>
  <div class="container mt-5 ">
    <div class="row justify-content-md-center mt-5 mb-5 ">
      <div class="col-md-9 text-center rounded quadro-sucess">
        <h1>Usuário Criado com Sucesso!</h1>
        <p>Click <a href="index.php ">aqui</a> para acessar a area ADM de Games.com</p>
      </div>
    </div>
  </div>
    <!-- footer site -->
    <?php include SITE_PATH.'/includes/footer.php'; ?>
</body>

</html>