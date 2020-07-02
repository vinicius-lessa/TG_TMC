<?php
/* 
4 SEMESTRE - SISTEMAS PARA INTERNET
Author: Vinícius Lessa da Silva
Since: 2020/06/19
*/
/*REMOVER WARNING*/

// session_start();

if (!defined('SITE_URL')) {
  include_once '../../config.php';
}

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

$titlePage = 'Sua Loja de Instrumentos on-line';
$data_slide = 0;
require SITE_PATH . '/Controllers/c_home.php';
// print_r($itensCarrosel);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/styles.css">
  <link rel="icon" href="<?php echo SITE_URL ?>/favicon.ico" type="image/x-icon">
  <title>
    Tcm.com | <?php echo $titlePage; ?>
  </title>
</head>

<body>
<!-- menu do site -->
<?php include SITE_PATH . '/includes/menu.php'; ?>
<!--conteudo da pagina -->
<section class="destaques">
  <div id="carroselDestaques" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carroselDestaques" data-slide-to="0" class="active"></li>
      <?php
      foreach ($itensCarrosel as $itemLista) {
        $data_slide++ ?>
        <li data-target="#carroselDestaques" data-slide-to="<?php echo $data_slide ?>"></li>
        <?php
      } ?>
    </ol>
    <div id="listaItensCarrosel" class="fundo-carrosel carousel-inner">
      <!-- item padrão do site -->
      <div class="carousel-item active">
        <div class="carousel-caption d-none d-md-block texto-carrosel">
          <h5 class="">Os Melhores Instrumentos</h5>
          <p>Você só encontra aqui no TMC - Trade Music Center</p>
        </div>
      </div>
      <!-- itens de produtos -->
      <?php foreach ($itensCarrosel as $itemLista) { ?>
        <div class="carousel-item"
             style="background-image: url('<?php echo SITE_URL ?>/images/produtos/<?php echo $itemLista['banner_img'] ?>');">
          <div class="carousel-caption d-md-block texto-carrosel">
            <h5 class="ft-laranja"><?php echo $itemLista['nome_prod'] ?>
            </h5>
            <p><?php echo $itemLista['descricao_prod'] ?>
            </p>
            <a href="<?php echo SITE_URL ?>/Views/produtos/detalhe.php?produto=<?php echo $itemLista['cod_produto'] ?>"
               class="btn btn-outline-dark">Confira</a>
          </div>
        </div>

      <?php } ?>

    </div>
    <!-- controle do carrosel  -->
    <a class="carousel-control-prev" href="#carroselDestaques" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carroselDestaques" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</section>

<!-- section de Destaques -->
<section>
    <?php if ($listaSugestao) { ?>
      <div class="row justify-content-center">
        <?php foreach ($listaSugestao as $itemSugestao) { ?>
          <div class="col-sm-3 col-10 mt-2">
            <a href="<?php echo SITE_URL ?>/Views/produtos/detalhe.php?produto=<?php echo $itemSugestao['cod_produto'] ?>"
               class="linkCardsVioloes">
              <div class="card text-center border-0 card-produto">
                <div class="card-header border-0 bg-transparent">
                  <h5 class="card-title text-uppercase">
                    <?php echo $itemSugestao['nome_prod'] ?>
                  </h5>
                  <p class="mt-n3"><?php echo $itemSugestao['nome_categoria'] ?>
                  </p>
                </div>
                <img class="card-img-top px-4 img-cover"
                     src="<?php echo SITE_URL ?>/images/produtos/<?php echo $itemSugestao['cover_img'] ?>"
                     alt="Cover: <?php echo $itemSugestao['nome_prod'] ?>">
                <div class="card-body">
                  <p class="card-text mt-n3"><small class="text-muted">Por Apenas</small></p>
                  <p class="card-text h2 font-weight-bold"><small>R$
                    </small><?php echo number_format($itemSugestao['valor_un'], 2, ',', '.') ?>
                  </p>
                </div>
                <div class="card-footer border-0 bg-transparent">
                  <a
                    href="<?php echo SITE_URL ?>/Controllers/c_pedido.php?addProduto=<?php echo $itemSugestao['cod_produto'] ?>"
                    class="btn btn-dark btn-block btn-comprar">Comprar</a>
                </div>
              </div>
            </a>
          </div>
        <?php } ?>
      </div>

    <?php } else {
      /**Carregar a pagina de erro quando não tiver produto cadastrado */
      include SITE_PATH . '/includes/erroCarregarProduto.php';
    } ?>

  </div>
</section>

<!-- section com link para lançamentos -->
<section>
  <div class="jumbotron jumbotron-fluid bk-escuro mt-5">
    <div class="container ">
      <div class="col">
        <h2 class="display-4 ft-laranja">Lançamentos</h2>
        <p class="lead ft-branca">Não perca nada, fique de olho em todos os lançamentos dos mais aguardados do momento!</p>
      </div>
    </div>
  </div>
</section>

<!-- section de Destaques -->
<section>
    <?php if ($listaSugestao) { ?>
      <div class="row justify-content-center">
        <?php foreach ($listaSugestao as $itemSugestao) { ?>
          <div class="col-sm-3 col-10 mt-2">
            <a href="<?php echo SITE_URL ?>/Views/produtos/detalhe.php?produto=<?php echo $itemSugestao['cod_produto'] ?>"
               class="linkCardsVioloes">
              <div class="card text-center border-0 card-produto">
                <div class="card-header border-0 bg-transparent">
                  <h5 class="card-title text-uppercase">
                    <?php echo $itemSugestao['nome_prod'] ?>
                  </h5>
                  <p class="mt-n3"><?php echo $itemSugestao['nome_categoria'] ?>
                  </p>
                </div>
                <img class="card-img-top px-4 img-cover"
                     src="<?php echo SITE_URL ?>/images/produtos/<?php echo $itemSugestao['cover_img'] ?>"
                     alt="Cover: <?php echo $itemSugestao['nome_prod'] ?>">
                <div class="card-body">
                  <p class="card-text mt-n3"><small class="text-muted">Por Apenas</small></p>
                  <p class="card-text h2 font-weight-bold"><small>R$
                    </small><?php echo number_format($itemSugestao['valor_un'], 2, ',', '.') ?>
                  </p>
                </div>
                <div class="card-footer border-0 bg-transparent">
                  <a
                    href="<?php echo SITE_URL ?>/Controllers/c_pedido.php?addProduto=<?php echo $itemSugestao['cod_produto'] ?>"
                    class="btn btn-dark btn-block btn-comprar">Comprar</a>
                </div>
              </div>
            </a>
          </div>
        <?php } ?>
      </div>

    <?php } else {
      /*Carregar erro quando não tiver produto cadastrado */
      include SITE_PATH . '/includes/erroCarregarProduto.php';
    } ?>

  </div>
</section>

<!-- footer site -->
<?php include SITE_PATH . '/includes/footer.php'; ?>
<!-- script bootstrap -->
<script src="<?php echo SITE_URL ?>/js/jquery-3.4.1.min.js">
</script>
<script src="<?php echo SITE_URL ?>/js/bootstrap.min.js">
</script>

</body>

</html>