<?php
  /* 
  4 SEMESTRE - SISTEMAS PARA INTERNET
  Author: Vinícius Lessa da Silva / Anderson Nascimento
  Since: 2020/06/19
  */
  /*REMOVER WARNING**/
  if (!defined('SITE_URL')) {
    include_once '../../config.php';
  }

  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

  $DetalheProduto = $_GET['produto'];
  $clienteLogado = isset($_SESSION['cod_cliente']) ? $_SESSION['cod_cliente'] : false;

  require SITE_PATH . '/Controllers/c_produto.php';

  // Titulo da pagina mudar de acordo com a pagina acessada
  $titlePage = "Produto " . $infoProduto['nome_prod'];
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/styles.css">
    <title>Tmc.com | <?php echo $titlePage; ?> </title>
  </head>

  <body>
    <!-- Nav -->
    <?php include SITE_PATH . '/includes/menu.php'; ?>
    
    <!-- Conteudo da pagina -->
    <main>
      <div class="container">

        <div class="row">
          <div class="col-12 col-md-6 mb-5">
            <img
              src="<?php echo SITE_URL ?>/images/produtos/<?php echo $infoProduto['cover_img'] ?>"
              class="img-fluid img-detalhe"
              alt="Foto do produto <?php echo $infoProduto['nome_prod'] ?>">
          </div>
          <div class="col-12 col-md-5 align-self-center">

            <!-- CARD COMPRAR -->
            <div class="p-2 mt-1">
              <div class="card-body text-center">
                <h1 class="card-title font-weight-bold h3 text-uppercase">
                  <?php echo $infoProduto['nome_prod']?>
                </h1>
                <h5>Categoria: <?php echo $infoProduto['nome_categoria']?></h5>
                  <p class="card-text pt-2"><small class="text-muted">Por Apenas</small></p>
                  <p class="card-text h2 mt-n3 ft-laranja"><small>R$</small>
                    <?php echo number_format($infoProduto['valor_un'], 2, ',', '.') ?>
                  </p>
                <p class="card-text ft-branca">Em Estoque: <?php echo $infoProduto['estoque'] ?>
                </p>
              </div>
              <div class="card-footer border-0 bg-transparent">
                <a
                  href="<?php echo SITE_URL ?>/Controllers/c_pedido.php?addProduto=<?php echo $infoProduto['cod_produto'] ?>&valor=<?php echo $infoProduto['valor_un'] ?>"
                  class="btn btn-dark btn-block btn-comprar btn-lg">Adicionar ao Carrinho</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-12 text-center">
            <div class="tt-header-wrap">
              <div class="tt-header">
                <h2>Informações do Produto</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row px-4 pt-2">
          <div class="col-12 text-center">
            <p><?php echo $infoProduto['descricao_prod'] ?>
            </p>
          </div>
          <div class="col-md-12 col-12 text-center">
            <h3 class="h4">Detalhes</h3>
            <table class="table">
              <tbody>
              <tr>
                <th scope="row">Categoria</th>
                <td>
                  <?php echo $infoProduto['nome_categoria']; ?>
                </td>
              </tr>
              <tr>
                <th scope="row">Código</th>
                <td>
                  <?php echo $infoProduto['cod_produto']; ?>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </main>

    <!--comentarios-->
    <aside class="mt-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="tt-header-wrap">
              <div class="tt-header">
                <h2>Comentários e Avaliações</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-2">
          <div class="col-6">
            <p class="text-left font-weight-bold"><span
                class="h5 font-weight-bold">Nota do Produto: <?php echo $notaMedia['notaMedia']; ?></span>
              <br><p class="font-weight-bold">Total de Avaliações: <?php echo $notaMedia['TotalAvaliacao']; ?> </p></p>
          </div>
          <div class="col-6 text-right">
            <p class="text-right">
              <a class=" btn btn-dark btn-comprar btn-lg"
                href="<?php echo SITE_URL ?>/Views/Clientes/cadastroComentario.php?produto=<?php echo $infoProduto['cod_produto']; ?>&nome=<?php echo $infoProduto['nome_prod']; ?>">Comentar Produto</a>
            </p>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-12">
            <?php foreach ($Comentarios as $comentario) {
              if ($comentario['avaliacao'] == 1) {
                $corAvaliacao = 'aval-ruim';
              } elseif ($comentario['avaliacao'] >= 4) {
                $corAvaliacao = 'aval-bom';
              } else {
                $corAvaliacao = 'aval-legal';
              }
              ?>
              <div class="media p-3 rounded mb-2 bk-comen">
                <div class="align-self-start mr-4">
                  <p class="">CLIENTE: <small>
                      <?php $nomeClienteComentario = explode(" ", $comentario['nome_cliente']);
                      echo current($nomeClienteComentario) ?></small></p>
                      <br>
                  <p class="mt-n4">DATA: 
                    <small><?php echo date('d-m-Y', strtotime($comentario['data_comentario'])) ?></small></p>
                </div>
                <div class="media-body">
                  <h5 class="font-weight-bold ft-laranja mt-0 titulo-comentario">TÍTULO: <?php echo $comentario['titulo_comentario'] ?></h5>
                  <p class="letra-ver">NOTA: <?php echo $comentario['avaliacao'] ?></p>
                  <p class="">COMENTÁRIO: <?php echo $comentario['comentario'] ?></p>
                </div>
                <?php if ($comentario['cod_cliente'] == $clienteLogado) { ?>
                  <div><a class="h4 letra-ver"
                          href="<?php echo SITE_URL ?>/Controllers/c_comentario.php?cod_comentario=<?php echo $comentario['cod_comentario'] ?>&cod_produto=<?php echo $comentario['cod_produto'] ?>">DELETAR</a>
                  </div>
                <?php } ?>
              </div>
            <?php } ?>

          </div>
        </div>

      </div>

    </aside>

    <!-- footer site -->
    <?php include SITE_PATH . '/includes/footer.php'; ?>
  </body>
</html>