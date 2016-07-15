<?php
/* Smarty version 3.1.29, created on 2016-07-11 09:03:53
  from "/Applications/MAMP/htdocs/tech-aca/keijiban2/templates/test.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578344d93a0dc0_08478113',
  'file_dependency' => 
  array (
    'e19646ff947b2cce0629344cbfd07016e0b7ab66' => 
    array (
      0 => '/Applications/MAMP/htdocs/tech-aca/keijiban2/templates/test.tpl',
      1 => 1467734309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578344d93a0dc0_08478113 ($_smarty_tpl) {
?>
<html>
<head>
    <title>smarty test</title>
</head>
<body>
    <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h2>
        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>
</p>
    </body>
</html>
<?php }
}
