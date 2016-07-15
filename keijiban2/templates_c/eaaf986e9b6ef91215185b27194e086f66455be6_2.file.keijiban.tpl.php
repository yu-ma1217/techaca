<?php
/* Smarty version 3.1.29, created on 2016-07-13 11:03:49
  from "/Applications/MAMP/htdocs/tech-aca/keijiban2/templates/keijiban.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578603f5e30a71_76782402',
  'file_dependency' => 
  array (
    'eaaf986e9b6ef91215185b27194e086f66455be6' => 
    array (
      0 => '/Applications/MAMP/htdocs/tech-aca/keijiban2/templates/keijiban.tpl',
      1 => 1468400622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578603f5e30a71_76782402 ($_smarty_tpl) {
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>掲示板２</title>
</head>
<body>
    
    <?php if (isset($_smarty_tpl->tpl_vars['session_name']->value)) {?>
    ようこそ<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['session_name']->value, ENT_QUOTES, 'UTF-8');?>
さん！
    <a href="logout.php">ログアウトする</a>

    <form method="POST" action="keijiban.php">
        <textarea name ="contents"></textarea>
        <input type="submit" value="投稿" />
    </form>
    
    <?php } else { ?>
    ユーザー登録またはログインしてください<br><br>
    <a href="register.php">ユーザー登録</a><br>
    <a href="login.php">ログイン</a><br>

    <?php }?>

    
    <?php if (isset($_smarty_tpl->tpl_vars['session_id']->value)) {?>
    
    <?php
$_from = $_smarty_tpl->tpl_vars['post_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_post_datas_0_saved_item = isset($_smarty_tpl->tpl_vars['post_datas']) ? $_smarty_tpl->tpl_vars['post_datas'] : false;
$_smarty_tpl->tpl_vars['post_datas'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['post_datas']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post_datas']->value) {
$_smarty_tpl->tpl_vars['post_datas']->_loop = true;
$__foreach_post_datas_0_saved_local_item = $_smarty_tpl->tpl_vars['post_datas'];
?>
    <table>
        
        <tr>
            <td>
                [<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_datas']->value['id'], ENT_QUOTES, 'UTF-8');?>
]
            </td>


            <td>
                
                <?php if ($_smarty_tpl->tpl_vars['post_datas']->value['user_id'] == $_smarty_tpl->tpl_vars['session_id']->value) {?>
                <table>
                    <td>
                        <form method="POST" action="edit.php">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_datas']->value['id'], ENT_QUOTES, 'UTF-8');?>
" />
                            <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_datas']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" />
                            <input type="textarea" name="contents"/>
                            <input type="submit" value="編集" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="delete.php">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_datas']->value['id'], ENT_QUOTES, 'UTF-8');?>
" />
                            <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_datas']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" />
                            <input type="submit" value="削除"  /><br />
                        </form>
                    </td>
                </table>
                <?php }?>
            </td>


        </tr>
        
        <tr>
            <td>
                名前
            </td>
            <td>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_datas']->value['name'], ENT_QUOTES, 'UTF-8');?>

            </td>
        </tr>
        
        <tr>
            <td>
                本文
            </td>
            <td>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_datas']->value['contents'], ENT_QUOTES, 'UTF-8');?>

            </td>
        </tr>
    </table>
    <br />

    <?php
$_smarty_tpl->tpl_vars['post_datas'] = $__foreach_post_datas_0_saved_local_item;
}
if ($__foreach_post_datas_0_saved_item) {
$_smarty_tpl->tpl_vars['post_datas'] = $__foreach_post_datas_0_saved_item;
}
?>
    <?php }?>


</body>
</html>
<?php }
}
