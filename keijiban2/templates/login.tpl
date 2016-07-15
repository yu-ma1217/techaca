<html>
<head>
    <title>ユーザーログイン</title>
</head>
<body>
    ログイン
    <!--ログインフォームの作成-->
    <form method="POST" action="login.php">
        ユーザーID:<input type="text" name="user_id" />
        パスワード:<input type="password" name="password" />
        <input type="submit" value="ログイン" />
    </form>
    
    <!--掲示板に戻る-->
    <a href="keijiban.php">戻る</a>
</body>
</html>
