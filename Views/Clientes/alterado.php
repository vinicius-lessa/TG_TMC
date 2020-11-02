<?php
/* 
4 SEMESTRE - SISTEMAS PARA INTERNET
Author: Vinícius Lessa da Silva / Anderson Nascimento
Since: 2020/06/19
*/
if(!defined('SITE_URL')){
include_once '../../config.php';
}
$titlePage = "Alterado!";

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
<body>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-9 text-center quadro-sucess">
        <h1 class="font-weight-bold letra-ver">Seu Cadastro foi Alterado Com Sucesso!</h1>
        <h4>Click <a href="../home/index.php">aqui</a> para voltar ao site</h4>
      </div>
    </div>
  </div>

    <!-- footer site -->
    <?php include SITE_PATH .'/includes/footer.php';?>
</body>

</html>