<?php
/* 
4 SEMESTRE - SISTEMAS PARA INTERNET
Author: Vinícius Lessa da Silva / Anderson Nascimento
Since: 2020/06/19
*/
/*REMOVER WARNING*/
if (!defined('SITE_URL')) {
    include_once '../../config.php';
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$titlePage = 'Carrinho de Compras';

$itensCarrinho = [];
$totalPedido = 0.00;
require SITE_PATH . '/Controllers/c_pedido.php';

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
  <title> Tmc.com | <?php echo $titlePage; ?>
  </title>
</head>

<body>
  <!-- menu do site -->
  <?php include SITE_PATH . '/includes/menu.php';?>

  <!--conteudo da pagina -->
  <main class="min-h-60 mx-4">
    <section>
      <div class="container">
        <div class="row">
          <div class="tt-header-wrap">
            <div class="tt-header font-weight-bold">
              <h2>Carrinho de Compras</h2>
              <p>Você pode fazer a finalização do seu pedido.</p>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-9 col-12">
            <table class="table table-striped table-bordered font-weight-bold">
              <thead class="thead">
                <tr>
                  <th scope="col">Imagem</th>
                  <th scope="col">Produto</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Estoque</th>
                  <th scope="col">Valor</th> <!--alterei-->
                  <th scope="col">Quantidade</th> <!--alterei-->
                  <th scope="col">Total</th>
                  <th scope="col-1">Excluir</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($itensCarrinho as $itemCarrinho) {
                  $totalPedido += floatval($itemCarrinho['quantidade'] * $itemCarrinho['valor_un']);?>
                <tr>
                  <td>
                    <img src="<?php echo SITE_URL ?>/images/produtos/<?php echo $itemCarrinho['cover_img'] ?>"
                      alt="Capa do Produto" class="img-thumbnail img-carrinho">
                  </td>
                  <td class="align-middle">
                    <a
                      href="<?php echo SITE_URL ?>/Views/produtos/detalhe.php?produto=<?php echo $itemCarrinho['cod_produto'] ?>">
                      <?php echo $itemCarrinho['nome_prod']; ?>
                    </a>
                  </td>
                  <td class="align-middle">
                    <?php echo $itemCarrinho['nome_categoria']; ?>
                  </td>
                  <td class="align-middle">
                    <?php echo $itemCarrinho['estoque']; ?>
                  </td>
                  <td class="align-middle">
                    <?php echo $itemCarrinho['valor_un']; ?>
                  </td>
                  <td class="align-middle">
                    <?php echo $itemCarrinho['quantidade']; ?>
                  </td>
                  <td class="align-middle">
                    <?php echo number_format($itemCarrinho['quantidade'] * $itemCarrinho['valor_un'], 2, '.', '.'); ?>
                  </td>
                  <td class="align-middle text-center">
                    <a href="./carrinho.php?remItem=<?php echo $itemCarrinho['cod_produto']; ?>">REMOVER</a>
                  </td>
                </tr>
                <?php
                }?>
              </tbody>
            </table>
          </div>
          <div class="col-md-3 col-12">
            <div class="card p-2 mt-1"> <!--alterei-->
              <div class="card-body text-center">
                <h1 class="card-title h3 text-uppercase">TOTAL</h1> <!--alterei-->
                <p class="card-text pt-2"><small class="">Valor Total da Compra</small></p> <!--alterei-->
                <p class="card-text h2 mt-n3 ft-laranja"><?php echo number_format($totalPedido, 2, ',', '.') ?>
                </p>
              </div>
              <div class="card-footer border-0 bg-transparent">
                <a href="<?php echo SITE_URL ?>/Controllers/c_pedido.php?finalizar=<?php echo $_SESSION['cod_carrinho'] ?>&total=<?php echo $totalPedido ?>"
                  class="btn btn-dark btn-block btn-comprar btn-lg">Finalizar Compra</a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>
  </main>

  <!-- footer site -->
  <?php include SITE_PATH . '/includes/footer.php';?>
</body>

</html>