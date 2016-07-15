<?php
require_once 'MySmarty.class.php';
require_once 'DbManager.php';

$smarty = new MySmarty();

session_start();


//ログインしてればsessionでuse_idとuser_nameを取得
if(isset($_SESSION['user_id']) && isset($_SESSION['user_name'])){
    $smarty->assign('session_id', $_SESSION['user_id']);
    $smarty->assign('session_name', $_SESSION['user_name']);

    try{
        $db=getDb();

        //投稿フォームの作成
        if(isset($_POST['contents'])){
            if($_POST['contents'] != ''){
                $stt=$db->prepare('INSERT INTO post(contents, user_id) VALUES (:contents, :user_id)');
                $stt->bindValue(':contents', $_POST['contents']);
                $stt->bindValue(':user_id', $_SESSION['user_id']);
                $stt->execute();
                $stt=NULL;
            }else{
                print "入力エラー：本文を入力してください";
            }
        }
        //postの表示をする
        //postテーブルとmemberテーブルをユーザーidでつなげる
        $stt = $db->query('SELECT post.id,post.contents,post.user_id,member.name FROM post LEFT JOIN member ON post.user_id = member.id order by post.id DESC');

        $post_data = array();

        //上のデータを連想配列でpost_dataに格納
        while($row = $stt->fetch(PDO::FETCH_ASSOC)){
            $post_data[] = $row;
        }

        $smarty->assign('post_data', $post_data);
        $db=NULL;
    }catch(PDOException $e){
        $db=NULL;
        die("エラーメッセージ:{$e->getMessage()}");
    }
}

$smarty->display('keijiban.tpl');

 ?>
