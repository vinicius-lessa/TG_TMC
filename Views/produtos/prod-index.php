<?php

session_start();

if (!defined('SITE_URL')) {
  include_once '../../config.php';
}



$titlePage = 'Cadastrar Produtos';
$itensProdHome = [];

require SITE_PATH . '/Controllers/c_produto.php';

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
        <h1 class="mt-3 font-weight-bold">Cadastrar, Alterar e Atualizar Produtos</h1>
      </div>
      <div class="row">
        <p class="col-12 mt-4 font-weight-bold">CLIQUE AQUI PARA CADASTRAR NOVOS PRODUTOS</p>
        <a class="col-5 btn btn-adm font-weight-bold my-2 mb-4 pt-2 pb-2" href="<?php echo SITE_URL ?>/Views/produtos/create-prod.php" role="button">Cadastrar Novo Produto</a>
      </div>
      <div class="row justify-content-md-center">
        <table class=" table text-center">
          <thead>
            <tr class="font-weight-bold">
              <th scope="col-1">Código</th>
              <th scope="col-4">Nome</th>
              <th scope="col-3">Categoria</th>
              <th scope="col-2">Estoque</th>
              <th scope="col-2">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              foreach ($itensProdHome as $linha) { 
            ?>
              <tr>
                <td>
                  <?php echo $linha['cod_produto'] ?>
                </td>
                <td>
                  <?php echo $linha['nome_prod'] ?>
                </td>
                <td>
                  <?php echo $linha['nome_categoria'] ?>
                </td>
                <td>
                  <?php echo $linha['estoque'] ?>
                </td>
                <td>
                  <button type="button" class="btn btn-primary"><a class="btn font-weight-bold text-white p-0" href="<?php echo SITE_URL ?>/Views/produtos/alter-prod.php?produto=<?php echo $linha['cod_produto']; ?>" role="button">Alterar</a></button>
                  <button type="button" class="btn btn-dark">   <a class="btn font-weight-bold text-white p-0" href="<?php echo SITE_URL ?>/Views/produtos/delete_prod.php?produto=<?php echo $linha['cod_produto']; ?>" role="button">Deletar</a></button>
                </td>
              </tr>
            <?php 
              } 
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>

  <?php require SITE_PATH . '/includes/footer-adm.php'; ?>
</body>

</html>