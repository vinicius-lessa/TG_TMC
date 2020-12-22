<?php

// VERSÃO LOCAL

define('HOST', '127.0.0.1');
define('DBNAME', 'dbtg2021');
define('USER', 'root');
define('PASSWORD', '');
 
class Conexao
{
 
    private static $pdo;
 
    private function __construct(){}
 
    public static function getConexao()
    {
        if (!isset(self::$pdo)) {
            $opt = [ PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8' ];
            self::$pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASSWORD,$opt);
        }
        return self::$pdo;
    }
}


// VERSÃO WEB

// define('HOST', 'db4free.net');
// define('DBNAME', 'dbtg2021');
// define('USER', 'root_lessa');
// define('PASSWORD', 'QS7tQHddZmnpe29');
 
// class Conexao
// {
//     private static $pdo;
 
//     private function __construct(){}
 
//     public static function getConexao()
//     {
//         if (!isset(self::$pdo)) {
//             $opt = [ PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8' ];
//             self::$pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASSWORD,$opt);
//         }
//         return self::$pdo;
//     }
// }