<?php
/*LOGOUT ADMINISTRATIVO*/
/*REMOVER WARNING**/
if (!defined('SITE_URL')) {
    include_once '../config.php';
}
session_start();
session_destroy();
header("location:" . SITE_URL . "/Views/adm/index.php");
