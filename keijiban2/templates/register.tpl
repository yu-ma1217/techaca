<!--登録画面-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ユーザー登録</title>
</head>
<body>
    ユーザー登録

    <!--登録フォームの作成(user_id, user_name, password)-->
    <form method="POST" action="register.php">
    <table>
        <tr>
            <td>ユーザーID:
            </td>
            <td>
                <input type="text" name="user_id"  />
            </td>
        </tr>
        <tr>
            <td>
                名前:
            </td>
            <td>
                <input type="text" name="user_name" />
            </td>
        </tr>
        <tr>
            <td>
                パスワード:
            </td>
            <td>
                <input type="password" name="password" />
            </td>
        </tr>
    </table>
    <input type="submit" value="登録" />
    </form>
    <a href="keijiban.php">戻る</a>
</body>
</html>
