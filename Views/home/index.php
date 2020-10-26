<?php
  /* 
  4 SEMESTRE - SISTEMAS PARA INTERNET
  Author: Vinícius Lessa da Silva / Anderson Nascimento
  Since: 2020/06/19
  */

  if (!defined('SITE_URL')) {
    include_once '../../config.php';
  }

  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

  $titlePage = 'Sua Loja de Instrumentos on-line';
  $data_slide = 0;

  require SITE_PATH . '/Controllers/c_home.php';

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <title>
    Tmc.com | <?php echo $titlePage; ?>
  </title>
</head>

<body>
<!-- menu do site -->
<?php include SITE_PATH . '/includes/menu.php'; ?>

<!--conteudo da pagina -->
<main class="min-h-60 mx-4">
  <article>
    <div class="container">
      <div class="row">
        <div class="col-md">

<!-- PESQUISA -->
<section>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <h4 class="cor-letras font-weight-bold">Busca</h4>
    <!--PESQUISA PRODUTOS-->
      <form class="box-search ml-3" action="<?php echo SITE_URL ?>/Views/produtos/todos.php" method="get">
        <div class="form-row">  
          <div class="row">
              <input class="form-control" type="search" name="pesquisa" id="pesquisa" placeholder="Digite aqui o que procura">
          </div>
        </div>
      </form>

      <div class="row">
      <h4 class="cor-letras font-weight-bold ml-3">Filtros</h4>
      </div>

      <div class="row ml-1">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Guitarras</label>
        </div>
      </div>

      <div class="row ml-1">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Violões</label>
        </div>
      </div>

      <div class="row ml-1">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Teclados</label>
        </div>
      </div>

      <div class="row ml-1">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Contra Baixo</label>
        </div>
      </div>

      <div class="row ml-1">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Pedaleiras</label>
        </div>
      </div>

      <div class="row ml-1">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Pedais</label>
        </div>
      </div>

      <div class="row ml-1">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Baterias</label>
        </div>
      </div>

      <div class="row ml-1">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Amplificadores</label>
        </div>
      </div>

      <div class="row ml-1">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Microfones</label>
        </div>
      </div>
      </div>

    <!-- LINHA SEPARATÓRIO VERTICAL -->
    <!-- <div class="vl"></div> -->

    <!-- ANUNCIOS -->
    <div class="col-md-8 ml-4 mt-3">
    <h1 class="cor-letras">Anúncios Recentes</h1>

    <!-- LINHA SEPARATÓRIO HORIZONTAL -->
    <hr></hr>

<!-- CONTEÚDO DA PÁGINA DE BUSCA -->
<section>
    <?php if ($listaSugestao) { ?>
      <div class="row justify-content-center">
        <?php foreach ($listaSugestao as $itemSugestao) { ?>
          <div class="col-sm-6 col-12 mt-2">
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
                  <p class="card-text mt-n3"><small class="text-muted">À Vista</small></p>
                  <p class="card-text h2 font-weight-bold"><small>R$
                    </small><?php echo number_format($itemSugestao['valor_un'], 2, ',', '.') ?>
                  </p>
                </div>
                <div class="card-footer border-0 bg-transparent">
                  <a href="<?php echo SITE_URL ?>/Controllers/c_pedido.php?addProduto=<?php echo $itemSugestao['cod_produto'] ?>&valor=<?php echo $itemSugestao['valor_un'] ?>" class="btn btn-dark btn-block btn-success">
                    Comprar
                  </a>
                </div>
              </div>
            </a>
          </div>
        <?php } ?>
      </div>

    <?php } else {
      /*Carregar a pagina de erro quando nÃ£o tiver produto cadastrado*/
      include SITE_PATH . '/includes/erroCarregarProduto.php';
    } ?>
  </div>
</section>

    </div>
  </div>
</div>
</section>

        </div>
      </div>
    </div>
  </article>
</main>


<!-- footer site -->
<?php include SITE_PATH . '/includes/footer.php'; ?>
<!-- script bootstrap -->
<script src="<?php echo SITE_URL ?>/js/jquery-3.4.1.min.js">
</script>
<script src="<?php echo SITE_URL ?>/js/bootstrap.min.js">
</script>

</body>

</html>