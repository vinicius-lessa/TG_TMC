<?php
/*REMOVER WARNING*/
if (!defined('SITE_URL')) {
  include_once '../config.php';
}

$conn = require SITE_PATH . '/Models/conexao.php';

include SITE_PATH . '/Models/m_favorito.php';

date_default_timezone_set('UTC');
