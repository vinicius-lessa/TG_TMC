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
      <div class="col-md-4">
        <a href="<?php echo SITE_URL ?>/Views/home/index.php"><img id="icon-logo"
            src="<?php echo SITE_URL ?>/images/produtos/logotipo.png" alt="Logo do site"></a>
      </div>

<!--PESQUISA PRODUTOS-->
      <div class="col-md-4">
        <form class="box-search bk-esc" action="<?php echo SITE_URL ?>/Views/produtos/todos.php" method="get">
          <div class="row">
            <div class="col-11 p-0 m-0">
              <h4 class="menu-entrar font-weight-bold">Pesquisa de Produtos</h4>
              <input class="input-search bk-esc" type="search" name="pesquisa" id="pesquisa" placeholder="Digite aqui o que procura">
            </div>
            <div class="col-1">
              <span>
                <button class="btn-search font-weight-bold" type="submit">IR</button>
              </span>
            </div>
          </div>
        </form>
      </div>


      <!--TELA DE LOGIN E LOGOUT-->
      <div class="col-md-3 text-right">
      <?php
        // Caso esteja LOGADO
        if (isset($_SESSION['nome_cliente'])) {
        $nomeCliente = explode(" ", $_SESSION['nome_cliente']);?>
        <!-- Editar Perfil -->
        <a href="<?php echo SITE_URL ?>/Views/Clientes/alterarCliente.php">
          <img title="editar perfil" class="circle-rounded" id="icone-user" src="<?php echo SITE_URL ?>/images/produtos/cliente.png" alt="">
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
          <img id="icone-user" src="<?php echo SITE_URL ?>/images/icones/utilizador.svg" alt="">
          <div class="menu-entrar font-weight-bold">
            <ul class="text-left">
              <li><a href="<?php echo SITE_URL ?>/Views/Clientes/loginCliente.php">Entrar</a>
              </li>
              <li><a href="<?php echo SITE_URL ?>/Views/Clientes/cadastroClientes.php">Cadastrar</a>
              </li>
            </ul>
          </div>
          <?php }?>
        </div>

      <!--ITENS CARRINHO-->
      <div class="col-md-1 text-right">
        <div class="carrinho">
          <a class="text-right" href="<?php echo SITE_URL ?>/Views/pedidos/carrinho.php" title="Meu Carrinho">
            <div class="icone-carrinho">
              <?php
              if ($itPendentes) {
                  echo "<span class='badge badge-light bdg-carrinho'>$itPendentes</span>";
              }?>
              <img class="img-sacola" src="<?php echo SITE_URL ?>/images/produtos/carrinho.png" alt="Meu Carrinho">
            </div>
          </a>
        </div>
      </div>
    </div>

      <!--MENU PRINCIPAL-->
      <div class="row">
      <div class="col-12 mt-4">
        <nav id="lista-menu">
          <ul>
            <li>
              <a class="border-button ft-escuro font-weight-bold" href="<?php echo SITE_URL ?>/Views/home/index.php"><span><img
                    src="<?php echo SITE_URL ?>/images/icones/home.svg" alt=""></span>Home</a>
            </li>
            <li>
              <a class="border-button ft-escuro font-weight-bold" href="<?php echo SITE_URL ?>/Views/produtos/violao.php"><span><img
                    src="<?php echo SITE_URL ?>/images/" alt=""></span>Violão</a>
            </li>
            <li>
              <a class="border-button ft-escuro font-weight-bold" href="<?php echo SITE_URL ?>/Views/produtos/guitarra.php"><span><img
                    src="<?php echo SITE_URL ?>/images/" alt=""></span>Guitarra</a>
            </li>
            <li>
              <a class="border-button ft-escuro font-weight-bold" href="<?php echo SITE_URL ?>/Views/produtos/bateria.php"><span><img
                    src="<?php echo SITE_URL ?>/images/" alt=""></span>Bateria</a>
            </li>
            <li>
              <a class="border-button ft-escuro font-weight-bold" href="<?php echo SITE_URL ?>/Views/produtos/todos.php"><span><img
                    src="<?php echo SITE_URL ?>/images" alt=""></span>Todos</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    
  </div>
</header>