<?php
/* Smarty version 3.1.29, created on 2016-07-13 11:03:50
  from "/Applications/MAMP/htdocs/tech-aca/keijiban2/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578603f6db6e09_93725619',
  'file_dependency' => 
  array (
    '8f3d05ec58c27ba59443ad13402cf0088ebdf2e0' => 
    array (
      0 => '/Applications/MAMP/htdocs/tech-aca/keijiban2/templates/login.tpl',
      1 => 1468400623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578603f6db6e09_93725619 ($_smarty_tpl) {
?>
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
<?php }
}
