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
$titlePage = "Sobre Nós";


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
    Tcm.com | <?php echo $titlePage; ?>
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
        <div class="col">
          <div class="tt-header-wrap">
            <div class="tt-header">
              <h1>Projeto PHP - Loja Virtual Tcm - Trade Music Center</h1>
              <p>Sobre o projeto Tcm.com</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
          <h2>Objetivo</h2>
          <p>O objetivo do projeto é desenvolver uma loja virtual em PHP com os dados no MySQL, proposto no curso de
            Desenvolvimento para Servidores,
            na FATEC SR, pelo prof Fernando Leonid, o tema escolhido para o projeto foi uma loja de vendas de Instrumentos Musicais.
            O site será dividido em 2 partes sendo a área de vendas e a área administrativa.</p>
          <section class="mt-4">
            <h2>Grupo inicial do projeto</h2>
            <p>@ViníciusLessadaSilva</p>
            <a href="https://github.com/vinni_lessa/Tcm.com">Projeto no GitHub</a>
          </section>
          <section class="mt-4">
            <h2>Requisitos Principais</h2>
            <h3>Site de Vendas</h3>
            <p>Opção de cadastro de cliente e login, carrinho de compras, comentários em produtos,
              consulta de produtos, produtos aleatórios
              em destaque, cadastro de produto favorito.</p>
            <h3>Área administrativa</h3>
            <p>Opção de cadastro e alteração de produtos, consulta de pedidos, etc.</p>
          </section>
        </div>
      </div>
    </div>
  </article>
</main>

<!-- footer site -->
<?php include SITE_PATH . '/includes/footer.php'; ?>
</body>

</html>