<?php
/* Smarty version 3.1.29, created on 2016-07-13 11:08:07
  from "/Applications/MAMP/htdocs/tech-aca/keijiban2/templates/register.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578604f7e1e057_22053510',
  'file_dependency' => 
  array (
    '6f0d3706f36eefd36e5eda3b474d33c383346a6c' => 
    array (
      0 => '/Applications/MAMP/htdocs/tech-aca/keijiban2/templates/register.tpl',
      1 => 1468400619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578604f7e1e057_22053510 ($_smarty_tpl) {
?>
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
<?php }
}
