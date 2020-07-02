<?php

include_once './config.php';

/*
echo $_SERVER['SERVER_NAME'] . "<br />";
// Retorna o path do arquivo onde está sendo executado
echo $_SERVER['PHP_SELF'] . "<br />";
// Retorna o path do pasta onde está sendo executado
echo $_SERVER['DOCUMENT_ROOT'] . "<br />";
// Retorna o path do arquivo onde está sendo executado o script
echo $_SERVER['SCRIPT_FILENAME'] . "<br />";
// Retorna o path e nome do arquivo que está executando
echo $_SERVER['SCRIPT_NAME'] . "<br />";
*/

//direcionar para home
header("location:" . SITE_URL . "/Views/home/index.php");
