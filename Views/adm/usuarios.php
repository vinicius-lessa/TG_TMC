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



$titlePage   = 'Usuários do ADM';
$listarusuarios = [];

require SITE_PATH . '/Controllers/c_usuario.php';

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
        <h1 class="h3 font-weight-bold pt-2">USUÁRIOS</h1>
      </div>
      <div class="row">
        <p class="col-12 font-weight-bold mt-3">CLIQUE AQUI PARA CADASTRAR NOVO USUÁRIO</p>
        <a class="col-4 btn btn-dark btn-adm my-2" href="<?php echo SITE_URL ?>/Views/adm/create.php" role="button">Cadastrar Usuário</a>
      </div>
      <div class="row justify-content-md-center">
        <table class="table text-center " style="width: 70%">
          <thead>
            <tr>
              <th scope="col-1">ID</th>
              <th scope="col-4">Nome</th>
              <th scope="col-2">Login</th>
              <th scope="col-2">Ações</th>

            </tr>
          </thead>
          <tbody>
            <?php foreach ($listarusuarios as  $linha) { ?>
              <tr>
                <td><?php echo $linha['cod_usuario'] ?>
                </td>
                <td><?php echo $linha['nome_usuario'] ?>
                </td>
                <td><?php echo $linha['log'] ?>
                </td>
                <td>
                  <button type="button" class="btn btn-primary"><a class="btn text-light p-0" href="<?php echo SITE_URL ?>/Views/adm/alter-usuario.php?usuario=<?php echo $linha['cod_usuario']; ?>&log=<?php echo $linha['log']; ?> " role="button">Alterar</a></button>
                  <button type="button" class="btn btn-dark">   <a class="btn text-light p-0" href="<?php echo SITE_URL ?>/Views/adm/delete_usr.php?usuario=<?php echo $linha['cod_usuario']; ?>&log=<?php echo $linha['log']; ?> " role="button">Deletar</a></button>
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