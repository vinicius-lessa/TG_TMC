<?php

if (!defined('SITE_URL')) {
    include_once '../config.php';
}

$conn = require SITE_PATH . '/Models/conexao.php';

/**funçoes usadas na home */
include SITE_PATH . '/Models/m_home.php';

if (isset($data_slide)) {
    
    /* Itens do carrosel */
    $itensCarrosel = carregarDestaques($conn);
    // print_r($itensCarrosel);

    /* Destaques */
    $listaSugestao = carregarSugestoes($conn);
}
