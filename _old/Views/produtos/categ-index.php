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
$categorias = [];


require SITE_PATH . '/Controllers/c_produto.php';
// $linha = [];
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

  <title>Categoria</title>
</head>

<body>
  <?php include SITE_PATH . '/includes/menu-adm.php'; ?>
  <main class="min-h-75">
    <div class="container">
      <div class="row justify-content-md-center">
        <h1 class="font-weight-bold mt-3">Cadastrar e Alterar Categoria de Produtos</h1>
      </div>
      <p class="font-weight-bold mt-2">CLIQUE AQUI PARA CADASTRAR NOVA CATEGORIA</p>
      <div class="row">
        <a class="col-4 font-weight-bold btn btn-block btn-adm my-2 mb-4 pt-2 pb-2" href="<?php echo SITE_URL ?>/Views/produtos/create-categ.php" role="button">Cadastrar Nova Categoria</a>
      </div>
      <div class="row justify-content-md-center">
        <table class="col-8 table text-center " style="width: 65%">
          <thead>
            <tr>
              <th>Código</th>
              <th>Nome</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($categorias as $linha) { ?>
              <tr>
                <td><?php echo $linha['cod_categoria'] ?>
                </td>
                <td><?php echo $linha['nome_categoria'] ?>
                <td class="col-3">
                <button type="button" class="btn btn-primary"><a class="btn text-light p-0" href="<?php echo SITE_URL ?>/Views/produtos/alter-categ.php?categoria=<?php echo $linha['cod_categoria']; ?>&nome=<?php echo $linha['nome_categoria']; ?>" role="button">Alterar</a></button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>

  <?php include SITE_PATH . '/includes/footer-adm.php'; ?>
</body>

</html>