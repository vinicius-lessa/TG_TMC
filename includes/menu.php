<?php

  /*ITENS NO CARRINHO*/
  $itPendentes = false;
  if (isset($_SESSION['carrinho'])) {
      $itPendentes = count($_SESSION['carrinho']);
  }

?>

<header class="menu-principal bk-preto mb-4">
  <div class="container-fluid pt-3 pl-2 pr-3">
    <div class="row">
      <div class="col-md-3">
      </div>


      <!--MENU PRINCIPAL-->
      <!-- <div class="row"> -->
      <div class="col-md-6">
        <nav id="lista-menu">
          <ul>
            <li>
              <a class="border-button ft-escuro font-weight-bold" href="<?php echo SITE_URL ?>/Views/home/index.php">Anúncios</a>
            </li>
            <li>
              <a class="border-button ft-escuro font-weight-bold" href="<?php echo SITE_URL ?>/Views/produtos/FeedMusical.php">Feed Musical</a>
            </li>
            <li>
              <a class="border-button ft-escuro font-weight-bold" href="<?php echo SITE_URL ?>/Views/produtos/MusicTradeCenter.php">Music Trade</a>
            </li>
            <li>
              <a class="border-button ft-escuro font-weight-bold" href="<?php echo SITE_URL ?>/Views/produtos/Anunciar.php">Anunciar</a>
            </li>
          </ul>
        </nav>
      </div>
    <!-- </div> -->


      <!--TELA DE LOGIN E LOGOUT-->
      <div class="menu-entrar col-md-3 text-right">
      <?php
        // Caso esteja LOGADO
        if (isset($_SESSION['nome_cliente'])) {
        $nomeCliente = explode(" ", $_SESSION['nome_cliente']);?>
        <!-- Editar Perfil -->
        <i class="fas fa-user-check fa-3x"></i>
        <a href="<?php echo SITE_URL ?>/Views/Clientes/alterarCliente.php">
        </a>
        
        <div class="menu-entrar">
          <ul class="text-left">
            <li>Olá, <strong><?php echo $nomeCliente[0] ?></strong>
            </li>
            </li>
            <li><a href="<?php echo SITE_URL ?>/Controllers/c_cliente.php?sair=true">Sair</a>
            </li>
          </ul>
          </div>
          <?php
          } else { ?>

          <!-- CONTATO -->
          <div class="menu-entrar font-weight-bold">
            <ul class="text-left">
              <li>
              <a href="<?php echo SITE_URL ?>/Views/Home/sobreNos.php"><i class="fas fa-envelope fa-2x ml-3"></i></a>
              </li>
              <li class="ml-1">
              <a href="<?php echo SITE_URL ?>/Views/Home/sobreNos.php">Contato</a>
              </li>
            </ul>
          </div>

          <!-- CADASTRE-SE -->
          <div class="menu-entrar font-weight-bold">
            <ul class="text-left">
              <li>
              <a href="<?php echo SITE_URL ?>/Views/Clientes/cadastroClientes.php"><i class="fas fa-user-friends fa-2x ml-4"></i></a>
              </li>
              <li class="">
              <a href="<?php echo SITE_URL ?>/Views/Clientes/cadastroClientes.php">Cadastre-se</a>
              </li>
            </ul>
          </div>

          <!-- LOGIN -->
          <div class="menu-entrar font-weight-bold">
            <ul class="text-left">
              <li>
              <a href="<?php echo SITE_URL ?>/Views/Clientes/loginCliente.php"><i class="fas fa-sign-in-alt fa-2x ml-3"></i></a>
              </li>
              <li class="ml-3">
              <a href="<?php echo SITE_URL ?>/Views/Clientes/loginCliente.php">Login</a>
              </li>
            </ul>
          </div>

          <?php }?>
          </div>
    
  </div>
</header>

<div class="row">
  <div class="col-md-12">
    <a href="<?php echo SITE_URL ?>/Views/home/index.php"><img id="logo-header"
      src="<?php echo SITE_URL ?>/images/logo.png" alt="Logo do site"></a>
  </div>
</div>