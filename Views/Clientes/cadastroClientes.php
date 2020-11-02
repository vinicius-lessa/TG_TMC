<?php
/* 
4 SEMESTRE - SISTEMAS PARA INTERNET
Author: Vinícius Lessa da Silva / Anderson Nascimento
Since: 2020/06/19
*/
include_once '../../config.php';
$titlePage = "Cadastro de Clientes";
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
    Tmc.com | <?php echo $titlePage ;?>
  </title>
</head>

<body>
  <!-- menu do site -->
  <?php include SITE_PATH .'/includes/menu.php';?>
  <!--conteudo da pagina -->
    <h2 class="caixa-cadastro font-weight-bold cor-letras">
      <span>Crie Sua Conta Aqui!</span>
    </h2>

<!-- FORMULÁRIO -->
  <div class="container caixa-formulario efeito rounded d-flex justify-content-center">
    <div class="row">
      <article class="col-12">
        <form class="cadastroForm" action='<?php echo SITE_URL ?>/Controllers/c_cliente.php' method="post">

        <div class="form-group inputGroup font-weight-bold">
          <label>Nome Completo</label>
          <input type="text" class="form-control box-search input-adm" name="nome_usuario" aria-describedby="" placeholder="Digite seu nome" required>
        </div>

        <div class="form-group inputGroup font-weight-bold">
          <label>E-mail</label>
          <input type="text" class="form-control box-search input-adm" name="email" placeholder="Digite seu e-mail" required>
        </div>

        <div class="form-group inputGroup font-weight-bold">
          <label>CEP</label>
          <input type="text" class="form-control box-search input-adm" name="cpf" aria-describedby="" placeholder="Digite seu CEP" required>
        </div>

        <div class="form-group inputGroup font-weight-bold">
          <label>Celular</label>
          <input type="text" class="form-control box-search input-adm" name="telefone" placeholder="Digite seu número" required>
        </div>

        <div class="form-group inputGroup font-weight-bold">
          <label>Senha</label>
          <input type="password" class="form-control box-search input-adm" name="senha" placeholder="Digite sua senha" required>
        </div>

        <input class="btn btn-dark btn-adm botao-cadastro box-search font-weight-bold mt-5 mb-5" type="submit" value="CADASTRAR" name="cadastrar" id="criar">

    <!-- LOGIN -->
      <hr></hr> 
        <div class="mb-3 mt-3 text-center px-md-3">
          <p>Já possui conta?
            <a href="<?php echo SITE_URL ?>/Views/Clientes/loginCliente.php">Entrar</a>
          </p>
        </div>
      </article>
    </div>
  </div>


  <!-- footer site -->
  <?php include SITE_PATH .'/includes/footer.php';?>
</body>

</html>