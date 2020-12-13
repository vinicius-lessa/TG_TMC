<?php

$dir = "/FATEC/4_SEMESTRE/Tmc.com/"; //CAMINHO VINICIUS 
// $dir = "/FATEC/4_SEMESTRE/TG_TMC_DESKTOP/"; //MEU CAMINHO

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('SITE_ROOT', ROOT.$dir);
define('SITE_PATH', ROOT.$dir);
define('SITE_URL', 'http://'.$_SERVER['HTTP_HOST'].$dir);