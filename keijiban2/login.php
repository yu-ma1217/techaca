<?php
require_once 'DbManager.php';
require_once 'MySmarty.class.php';

$smarty = new MySmarty();

session_start();

try{
    $db = getDb();
    if(isset($_POST['user_id']) && isset($_POST['password'])){

        //postされたidとパスワードを格納
        $user_id = $_POST['user_id'];
        $password = $_POST['password'];

        //user_id が memberテーブルに存在するか確認
        $stt = $db->query("SELECT * FROM member WHERE id = '$user_id'");

        //idが存在するかどうか
        $number = $stt->rowCount();


        //memberテーブルにidが存在する場合
        if($number != 0){
            //memberテーブルからpasswordと名前を取得
            while($row = $stt->fetch(PDO::FETCH_ASSOC)){
                $member_password = $row['password'];
                $member_name = $row['name'];
            }
            $db =NULL;
            //パスワードのチェック
            //sessionにidと名前を格納
            if($password == $member_password){
                session_regenerate_id(true);
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_name'] = $member_name;
                header("Location: keijiban.php");
                exit;
            }else{
                print "パスワードが異なります";
            }
        }else{
            print "IDもしくはパスワードに誤りがあります";
        }

    }
}catch(PDOExeption $e){
    $db = NULL;
    die("エラーメッセージ:{$e->getMessage()}");
}

$smarty->display('login.tpl');
 ?>
