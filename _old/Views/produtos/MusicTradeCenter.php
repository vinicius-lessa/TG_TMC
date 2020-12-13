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
$listaGuitarras = [];
$codCategoria = 2;
$limit = 12; /** quantidade de guitarra por pg */
$Nextpg = (isset($_GET['page'])) ? ($_GET['page'] + 1) : 1;
$Prevpg = (isset($_GET['page']) && $Nextpg > 1) ? ($_GET['page'] - 1) : 0;
$offset = (isset($_GET['page'])) ? ($_GET['page'] * $limit) : 0;

require SITE_PATH . '/Controllers/c_produto.php';

$titlePage = "Guitarras";

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
    Tmc.com | <?php echo $titlePage; ?>
  </title>
</head>

<body>
  <!-- menu do site -->
  <?php include SITE_PATH . '/includes/menu.php';?>
  <!--conteudo da pagina -->
  <div>
    <div class="">
      <div class="caixa-guitarra">
        <h1 class="display-guitarra">Music Trade Center</h1>
        <h4 class="display-guitarra-2">EM CRIAÇÃO!</h4>
      </div>
    </div>
  </div>

  <!-- section com a lista das guitarras  -->
  <section>
    <div class="container mt-5">
    <?php
if ($listaGuitarras) {?>
      <div class="row">
        <?php foreach ($listaGuitarras as $produto) {?>
        <div class="col-sm-3 mb-3">
          <a href="<?php echo SITE_URL ?>/Views/produtos/detalhe.php?produto=<?php echo $produto['cod_produto'] ?>"
            class="linkCardsVioloes">
            <div class="card text-center border-0 card-produto">
              <div class="card-header border-0 bg-transparent">
                <h5 class="card-title text-uppercase">
                  <?php echo $produto['nome_prod'] ?>
                </h5>
                <p class="text-muted mt-n3"><?php echo $produto['nome_categoria'] ?>
                </p>
              </div>
              <img class="card-img-top px-5 img-cover"
                src="<?php echo SITE_URL ?>/images/produtos/<?php echo $produto['cover_img'] ?>"
                alt="Cover: <?php echo $produto['nome_prod'] ?>">
              <div class="card-body">
                <p class="card-text mt-n3"><small class="text-muted">Por Apenas</small></p>
                <p class="card-text h2 font-weight-bold"><small>R$
                  </small><?php echo number_format($produto['valor_un'], 2, ',', '.') ?>
                </p>
              </div>
              <div class="card-footer border-0 bg-transparent">
                <a href="<?php echo SITE_URL ?>/Controllers/c_pedido.php?addProduto=<?php echo $produto['cod_produto'] ?>&valor=<?php echo $produto['valor_un'] ?>"
                  class="btn btn-dark btn-block btn-comprar">Comprar</a>
              </div>
            </div>
          </a>
        </div>
        <?php }?>
      </div>
      <?php } else {
    /*Carregar erro quando não tiver produto cadastrado */
    include SITE_PATH . '/includes/erroCarregarProduto.php';
}?>
    </div>
  </section>
  <!-- menu de navegação das paginas -->
  <nav aria-label="Navegação de página exemplo">
    <ul class="pagination justify-content-center ">
      <li class="page-item <?php if ($Nextpg == 1) {
    echo 'disabled';
}?>">
        <a class="page-link bk-escuro ft-branca" href="./guitarra.php?page=<?php echo $Prevpg ?>">Anterior</a>
      </li>
      <li class="page-item <?php if (count($listaGuitarras) < $limit) {
    echo 'disabled';
}?>">
        <a class="page-link bk-escuro ft-branca" href="./guitarra.php?page=<?php echo $Nextpg ?>">Próximo</a>
      </li>
    </ul>
  </nav>

  <!-- footer site -->
  <?php include SITE_PATH . '/includes/footer.php';?>
</body>

</html>