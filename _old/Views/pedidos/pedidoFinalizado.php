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
  $titlePage = "Pedido Finalizado";
  $PedidoCriado = [];

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
  <title>
    Tmc.com | <?php echo $titlePage; ?>
  </title>
</head>

<body>
    <!-- menu do site -->
    <?php include SITE_PATH . '/includes/menu.php';?>
  <main id="bg-finalizado">
    <section>
      <div class="d-flex justify-content-center">
        <div class="card-pedido font-weight-bold mt-md-2 px-5 py-2 rounded shadow align-items-center">
          <a href="<?php echo SITE_URL ?>/Views/home/index.php"> <img class="mx-auto d-block" src="<?php echo SITE_URL ?>/images/logo.png" alt="Logo Loja"><a>
          <h1 class="text-center font-weight-bold mb-4 py-4">Pedido nº <?php echo $PedidoCriado['cod_pedido'] ?>
          </h1>
          <p>Obrigado <span class="letra-ver"><?php echo $PedidoCriado['nome_cliente'] ?></span>,
          </p>
          <p>sua compra no valor de <span class="letra-ver">R$
              <?php echo number_format($PedidoCriado['valor_pedido'], 2, ',', '') ?></span>
            foi efetuada com Sucesso!</p>
          <p>Sua compra chegará dia <span class="letra-ver">
              <?php
                $dataEntrega = date("Y/m/d");
                echo $dataEntrega;
              ?>
            </span></p>
          <h5 class="text-right "><small><a href="<?php echo SITE_URL ?>/Views/home/index.php">Clique Aqui para Voltar ao Site</a></small></h5>

        </div>
      </div>
    </section>


  </main>
  <!-- footer site -->
  <?php include SITE_PATH . '/includes/footer.php';?>
</body>

</html>