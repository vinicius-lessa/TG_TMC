<?php
if (session_status() != 2) {
    session_start();
}

if(isset($_GET['lang']) && $_GET['lang'] == "pt-BR" || $_GET['lang'] == 'en'){
    $_SESSION['lang'] = $_GET['lang'];
}else{
    $_SESSION['lang'] = 'pt-BR';
}

header('location: ' . $_SERVER['HTTP_REFERER']);