<?php
require_once 'MySmarty.class.php';
require_once 'DbManager.php';

$smarty = new MySmarty();
session_start();

try{
    //keijiban.phpからpostで取得
    if(isset($_POST['contents']){
        $id = $_POST['id'];
        $contents = $_POST['contents'];
        $user_id = $_POST['user_id'];

        //編集・更新
        $db = getDb();
        $stt = $db->prepare('UPDATE post set contents = :contents where id = :id');
        $stt->bindParam(':contents', $contents, PDO::PARAM_STR);
        $stt->bindParam(':id', $id, PDO::PARAM_STR);
        $stt->execute();

        echo "更新完了";
        $db = NULL;


    }else{
        print "入力エラー:本文を入力してください";
    }

}catch(PDOExeption $e){
    $db = NULL;
    die("エラーメッセージ:{$e->getMessage()}");
}
$smarty->display('edit.tpl');
?>
