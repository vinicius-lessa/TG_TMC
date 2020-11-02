<?php
  /* 
  4 SEMESTRE - SISTEMAS PARA INTERNET
  Author: Vinícius Lessa da Silva / Anderson Nascimento
  Since: 2020/06/19
  */

  session_start();

  /*REMOVER WARNING*/
  if (!defined('SITE_URL')) {
    include_once '../../config.php';
  }

  $titlePage      = 'Clientes Cadastrados';
  $listarClientes = [];

  require SITE_PATH . '/Controllers/c_cliente.php';

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

  <title><?php $titlePage; ?>
  </title>
</head>

<body>
  <?php require SITE_PATH . '/includes/menu-adm.php'; ?>
  <main class="min-h-75">
    <div class="container">
      <div class="row justify-content-md-center">
        <h1 class="h3 pt-2">CLIENTES</h1>
      </div>
      <div class="row justify-content-md-center">
        <table class="table text-center " style="width: 70%">
          <thead>
            <tr>
              <th scope="col-1">Cod. Cliente</th>
              <th scope="col-4">Nome</th>
              <th scope="col-2">E-mail</th>
              <th scope="col-2">Ações</th>

            </tr>
          </thead>
          <tbody>
            <?php foreach ($listarClientes as  $linha) { ?>
              <tr>
                <td><?php echo $linha['cod_cliente'] ?>
                </td>
                <td><?php echo $linha['nome_cliente'] ?>
                </td>
                <td><?php echo $linha['email'] ?>
                </td>
                <td>
                  <button type="button" class="btn btn-primary"><a class="btn text-light p-0" href="<?php echo SITE_URL ?>/Views/adm/alter-cliente.php?cod_cliente=<?php echo $linha['cod_cliente']; ?>" role="button">Alterar</a></button>
                  <button type="button" class="btn btn-dark">   <a class="btn text-light p-0" href="<?php echo SITE_URL ?>/Views/adm/delete-cli.php?cod_cliente=<?php echo $linha['cod_cliente']; ?>" role="button">Deletar</a></button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>

  <?php require SITE_PATH . '/includes/footer-adm.php'; ?>
</body>

</html>