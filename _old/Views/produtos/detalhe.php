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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>Tmc.com | <?php echo $titlePage; ?> </title>
  </head>

  <body>
    <!-- Nav -->
    <?php include SITE_PATH . '/includes/menu.php'; ?>
    
    <!-- Conteudo da pagina -->
    <main>
    <div class="row">
    <div class="col-12">
    <h2 class="text-center cor-letras font-weight-bold"><?php echo $infoProduto['nome_prod']?></h2>
    </div>
    </div>

      <div class="container">

      <!-- LINHA HORIZONTAL -->
      <hr></hr>

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
                <h5>Tipo: <?php echo $infoProduto['tipo_prod']?></h5>
                <h5>Modelo: <?php echo $infoProduto['modelo_prod']?></h5>
                <h5>Localização: <?php echo $infoProduto['localizacao_prod']?></h5>
                  <p class="card-text pt-2"><small class="text-muted">À Vista</small></p>
                  <p class="card-text h2 mt-n3 ft-laranja"><small>R$</small>
                    <?php echo number_format($infoProduto['valor_un'], 2, ',', '.') ?>
                  </p>
                <p class="card-text ft-branca">Em Estoque: <?php echo $infoProduto['estoque'] ?>
                </p>
              </div>

              <!-- BOTÃO DE COMPRAR -->
              <div class="card-footer border-0 bg-transparent">
                <a
                  href="<?php echo SITE_URL ?>/Controllers/c_pedido.php?addProduto=<?php echo $infoProduto['cod_produto'] ?>&valor=<?php echo $infoProduto['valor_un'] ?>"
                  class="btn btn-dark btn-block btn-comprar btn-lg">Adicionar ao Carrinho</a>
              </div>

            <!-- BOTÃO DE CHAT -->
              <div class="card-footer border-0 bg-transparent">
                <a
                  href="<?php echo SITE_URL ?>/ ?>"
                  class="btn btn-dark btn-block btn-comprar btn-lg">Bate-Papo</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-12 text-center cor-letras">
            <div class="tt-header-wrap">
              <div class="tt-header">
                <h2 class="font-weight-bold">Informações do Produto</h2>
              </div>
            </div>
          </div>
        </div>

    <!-- LINHA HORIZONTAL -->
      <hr></hr>

          <div class="col-md-12 col-12 mt-4 text-center">
            <h3 class="h4 font-weight-bold">Detalhes</h3>
            <table class="table">
              <tbody>
              <tr>
                <th scope="row">Descrição</th>
                <td>
                <p><?php echo $infoProduto['descricao_prod'] ?></p>
                </td>
              </tr>
              <tr>
                <th scope="row">Categoria</th>
                <td>
                  <?php echo $infoProduto['nome_categoria']; ?>
                </td>
              </tr>
              <tr>
                <th scope="row">Marca</th>
                <td>
                <?php echo $infoProduto['nome_categoria']?>
                </td>
              </tr>
              <tr>
                <th scope="row">Modelo</th>
                <td>
                <?php echo $infoProduto['modelo_prod']?>
                </td>
              </tr>
              <tr>
                <th scope="row">Localização</th>
                <td>
                <?php echo $infoProduto['localizacao_prod']?>
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

    <!-- footer site -->
    <?php include SITE_PATH . '/includes/footer.php'; ?>
  </body>
</html>