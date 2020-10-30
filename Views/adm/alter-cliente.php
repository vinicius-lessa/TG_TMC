<?php
  /* 
  4 SEMESTRE - SISTEMAS PARA INTERNET
  Author: Vinícius Lessa da Silva / Anderson Nascimento
  Since: 2020/06/19
  */
  if (!defined('SITE_URL')) {
    include_once '../../config.php';
  }

  $titlePage = "Alterar Cliente";
  $codCliente = $_GET['cod_cliente'];

//include SITE_PATH . '/Controllers/c_validation.php';  
  include SITE_PATH . '/Controllers/c_alterarCliente.php';
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
      <h1>Alterar Cliente (código): <?php echo $codCliente; ?></h1>
    </div>
    <div class="row justify-content-md-center mt-3">
      <div class="col-md-6">
        <form action='<?php echo SITE_URL ?>/Controllers/c_alterarCliente.php?cod_cliente=<?php echo $codCliente ?>' method="post">
        <h1 class="h3 mb-3 font-weight-normal text-center">ALTERAR DADOS CADASTRADOS</h1>
        
        <!-- Nome -->
        <div class="form-group inputGroup">
            <label for="nome_cliente">Nome</label>
            <input type="text" class="form-control box-search input-adm" name="nome_cliente" placeholder="NOME" value="<?php echo $dadosCliente['nome_cliente'] ?>" required>
          </div>

          <!-- E-mail -->
          <div class="form-group inputGroup">
            <label for="email_cliente">E-mail</label>
            <input type="text" class="form-control box-search input-adm" name="email" placeholder="EMAIL" value="<?php echo $dadosCliente['email'] ?>" required>
          </div>

          <!-- TELEFONE -->
          <div class="form-group inputGroup">
            <label for="telefone_cliente">Celular</label>
            <input type="text" class="form-control box-search input-adm" name="telefone" placeholder="TELEFONE" value="<?php echo $dadosCliente['telefone'] ?>" required>            
          </div>
          
          <div style="display:none;">
            <label for="telefone_cliente">Modo Admin</label>
            <input class="btn btn-dark" type="radio" name="adm" id="adm" value="true" checked>
          </div>

          <div class="d-flex justify-content-center">            
            <input class="btn btn-dark btn-adm mx-2 col-3" type="submit" value="Alterar" name="alterar" id="alterar">
            <a class="btn btn-dark btn-block btn-adm mx-2 col-3" href="./adm-alterarCliente.php">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<?php require SITE_PATH . '/includes/footer-adm.php'; ?>


</html>