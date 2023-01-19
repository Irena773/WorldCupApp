<?php
use mysqli;

use PDO;
// docker-php-ext-enableでmysqliがインストールされているか確認する
// docker-php-ext-enable mysqli をする
// $mysqli = new mysqli('db', 'root', 'root', 'mysql');
// if($mysqli->connect_error) {
//     echo '接続失敗'.PHP_EOL;
//     exit();
// } else {
//     echo '接続成功'.PHP_EOL;
// }

try 
{   
    $database_handler = new PDO('mysql:host=localhost:3306;dbname=laravel_db;', 'root', 'root');
    echo "接続できました\n";
}   
catch (PDOException $e) 
{   
    echo "DB接続に失敗しました。\n";
    echo $e->getMessage() . "\n";
    exit;
}   