<?php
require_once 'MySmarty.class.php';
require_once 'DbManager.php';


$smarty = new MySmarty();
try{
    $db=getDb();

    if(isset($_POST['user_id']) && isset($_POST['user_name']) && isset($_POST['password'])){
        if($_POST['user_id'] != "" && $_POST['user_name'] != "" && $_POST['password'] != ""){

            //idの重複をチェック
            $stt = $db->query("SELECT * FROM member WHERE id = '$_POST[user_id]'");
            $double_count = $stt->rowCount();

            //重複がなければ登録
            if($double_count == 0){
                $stt = $db->prepare('INSERT INTO member (id, name, password) VALUES (:user_id, :user_name, :password)');
                $stt->bindValue(':user_id', $_POST['user_id']);
                $stt->bindValue(':user_name', $_POST['user_name']);
                $stt->bindValue(':password', $_POST['password']);

                $stt->execute();
                $stt=NULL;
                $db=NULL;
                header("Location: keijiban.php");
            }else{
                print "ユーザーIDが重複しています";
            }

        }else{
            print "入力漏れがあります";
        }
    }
}catch(PDOExeption $e){
    $db=NULL;
    die("エラーメッセージ:{$e->getMessage()}");
}

$smarty->display('register.tpl');
 ?>
