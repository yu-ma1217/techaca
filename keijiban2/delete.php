<?php
require_once 'MySmarty.class.php';
require_once 'DbManager.php';

$smarty = new MySmarty();
session_start();

try{
    //keijiban.phpからpostのidとuser_id取得
    $id = $_POST['id'];
    $user_id = $_POST['user_id'];

    //削除・更新
    $db = getDb();
    $stt = $db->prepare('UPDATE post SET contents = "deleted" WHERE id = :delete_id');
    $stt->bindParam(':delete_id', $id, PDO::PARAM_STR);
    $stt->execute();
    echo "削除完了";
    $db = NULL;

}catch(PDOExeption $e){
    $db = NULL;
    die("エラーメッセージ:{$e->getMessage()}");
}

$smarty->display('delete.tpl');

 ?>
