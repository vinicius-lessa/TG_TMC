<?php
  /* 
  4 SEMESTRE - SISTEMAS PARA INTERNET
  Author: Vinícius Lessa da Silva / Anderson Nascimento
  Since: 2020/06/19
  */
  if (!defined('SITE_URL')) {
    include_once '../../config.php';
  }
  $titlePage = 'ADM Loja'
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
    <!-- menu do site -->
    <?php include SITE_PATH.'/includes/menu.php'; ?>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-9 text-center quadro-sucess">
        <h1 class="font-weight-bold letra-ver">Usuário Criado com Sucesso!</h1>
        <h5>Click <a href="index.php ">aqui</a> para acessar a area Administrativa do Site</h5>
      </div>
    </div>
  </div>
    <!-- footer site -->
    <?php include SITE_PATH.'/includes/footer.php'; ?>
</body>

</html>