<?php
/* 
4 SEMESTRE - SISTEMAS PARA INTERNET
Author: Vinícius Lessa da Silva / Anderson Nascimento
Since: 2020/06/19
*/
$conf = require '../../config.php';

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

  <title>Tcm.com</title>
</head>

<body>
  <!-- menu do site -->
  <?php include SITE_PATH.'/includes/menu.php'; ?>
  <!--conteudo da pagina -->

<!-- FORMULÁRIO -->
<div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-4">
        <form class="mt-2 px-md-3" action='<?php echo SITE_URL ?>/Controllers/c_cliente.php' method="post">
          <h1 class="h3 mb-3 font-weight-bold text-center cor-letras mb-5">Faça seu Login</h1>
          <label for="staticEmail" class="col-form-label font-weight-bold">E-mail</label>
          <input type="text" id="login_user" class="form-control box-search input-adm mb-2" name="email" placeholder="E-mail"
            autofocus required>
            <label for="staticEmail" class="col-form-label font-weight-bold">Senha</label>
          <input type="password" id="pass_user" class="form-control box-search input-adm mb-2" name="senha" placeholder="Senha" required>
          <button class="btn btn-dark btn-adm botao-cadastro box-search mt-5 mb-5" type="submit" name="acessar">Login</button>
        </form>

        <hr></hr>
        <div class="mb-3 mt-3 text-center px-md-3">
          <p> Não possui conta?
            <a href="<?php echo SITE_URL ?>/Views/Clientes/cadastroClientes.php">Cadastre-se
              aqui</a>
          </p>
        </div>
      </div>
    </div>
  </div>


  <!-- footer site -->
  <?php include SITE_PATH.'/includes/footer.php'; ?>
</body>

</html>