<?php
function getDb(){
    $dsn = 'mysql:dbname=techaca; host=localhost';
    $user = 'root';
    $password = 'root';
    try{
        $db = new PDO($dsn, $user, $password);
        $db->exec('SET NAMES utf8');
    }catch(PDOExeption $e){
        $db = NULL;
        die('接続エラー：{$e->getMessage()}');
    }
    return $db;
}
