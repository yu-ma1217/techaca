<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>掲示板２</title>
</head>
<body>
    {* ログインしている時の画面 *}
    {if isset($session_name)}
    ようこそ{$session_name}さん！
    <a href="logout.php">ログアウトする</a>

    <form method="POST" action="keijiban.php">
        <textarea name ="contents"></textarea>
        <input type="submit" value="投稿" />
    </form>
    {*ログインしていない時の画面*}
    {else}
    ユーザー登録またはログインしてください<br><br>
    <a href="register.php">ユーザー登録</a><br>
    <a href="login.php">ログイン</a><br>

    {/if}

    {*投稿されたデータを表示*}
    {if isset($session_id)}
    {*post内のデータを一つずつ取得*}
    {foreach $post_data as $post_datas}
    <table>
        {*投稿されたid*}
        <tr>
            <td>
                [{$post_datas.id}]
            </td>


            <td>
                {* ログインしていれば編集・削除の表示 *}
                {if $post_datas.user_id == $session_id}
                <table>
                    <td>
                        <form method="POST" action="edit.php">
                            <input type="hidden" name="id" value="{$post_datas.id}" />
                            <input type="hidden" name="user_id" value="{$post_datas.user_id}" />
                            <input type="textarea" name="contents"/>
                            <input type="submit" value="編集" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="delete.php">
                            <input type="hidden" name="id" value="{$post_datas.id}" />
                            <input type="hidden" name="user_id" value="{$post_datas.user_id}" />
                            <input type="submit" value="削除"  /><br />
                        </form>
                    </td>
                </table>
                {/if}
            </td>


        </tr>
        {*投稿された名前*}
        <tr>
            <td>
                名前
            </td>
            <td>
                {$post_datas.name}
            </td>
        </tr>
        {*投稿された本文*}
        <tr>
            <td>
                本文
            </td>
            <td>
                {$post_datas.contents}
            </td>
        </tr>
    </table>
    <br />

    {/foreach}
    {/if}


</body>
</html>
