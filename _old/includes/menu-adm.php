
<nav class="navbar navbar-expand-lg bk-preto">
  <a href="<?php echo SITE_URL ?>/Views/home/index.php"><img id="icon-logo" src="<?php echo SITE_URL ?>./images/logo.png" alt="Logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#itensNav" aria-controls="itensNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="itensNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo SITE_URL ?>/Views/adm/adm-index.php"><strong class="ft-escuro font-weight-bold">GERENCIAMENTO</strong>
        </a>
      </li>
    </ul>
    <span class="navbar-text" style="color: white;">      
      <?php
        if (isset($_SESSION['nome_usuario'])) {
            $usuario = explode(" ", $_SESSION['nome_usuario']);
            echo "Olá Administrador(a), <b>" . ucfirst($usuario[0]);
        } else {
          echo "Olá Administrador(a)";
        }
      ?>!</b>
      <a class="ml-4" href="<?php echo SITE_URL ?>/Controllers/c_sair.php"><strong class="ft-escuro">Sair</strong></a>
    </span>
  </div>
</nav>